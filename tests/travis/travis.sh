#!/bin/bash

SCRIPT_DIR=$( dirname "$0" )

# for travis_wait function
source $SCRIPT_DIR/travis-helper.sh

# go to tests directory
cd ../PHPUnit

if [ -n "$TEST_SUITE" ]
then
    echo "Executing tests in test suite $TEST_SUITE..."

    if [ -n "$PLUGIN_NAME" ]
    then
        echo "    [ plugin name = $PLUGIN_NAME ]"
    fi

    if [ "$TEST_SUITE" = "AngularJSTests" ]
    then
        ./../angularjs/scripts/travis.sh
    elif [ "$TEST_SUITE" = "JavascriptTests" ]
    then

        if grep "sudo: false" "$TRAVIS_BUILD_DIR/.travis.yml"; then
            phantomjs ../javascript/testrunner.js "http://localhost:3000/tests/javascript/"
        else
            phantomjs ../javascript/testrunner.js "http://localhost/tests/javascript/"
        fi
    elif [ "$TEST_SUITE" = "UITests" ]
    then
        if [ -n "$PLUGIN_NAME" ]
        then
            artifacts_folder="ui-tests.$TRAVIS_BRANCH.$PLUGIN_NAME"

            if [ "$UNPROTECTED_ARTIFACTS" = "" ];
            then
                artifacts_folder="protected/$artifacts_folder"
            fi
        else
            artifacts_folder="ui-tests.$TRAVIS_BRANCH"
        fi

        echo ""
        echo "View UI failures (if any) here:"
        echo ""
        echo "http://builds-artifacts.piwik.org/$TRAVIS_REPO_SLUG/$TRAVIS_BRANCH/$TRAVIS_BUILD_NUMBER/"
        echo ""
        echo "If the new screenshots are valid, then you can copy them over to the right directory with the command:"

        echo ""
        echo "./console tests:sync-ui-screenshots $TRAVIS_BUILD_NUMBER"
        if [ -n "$PLUGIN_NAME" ]
        then
            echo "  --plugin=$PLUGIN_NAME"

            if [ "$UNPROTECTED_ARTIFACTS" = "" ];
            then
                echo " --http-user=... --http-password=..."
            fi
        fi
        
        echo ""

        if [ -n "$PLUGIN_NAME" ]
        then
            # HACK: this is a hack to get UI test jobs to run. the --extra-options option was added for 2.15.1, but
            #       older Piwik's will end up w/ a tests:run-ui command that doesn't support it.
            # a better fix would be to decouple the piwik testing framework from piwik in a way that allowed us to
            # change code for all versions of Piwik as well as selectively for individual Piwik versions.
            git checkout master ../../plugins/TestRunner/Commands/TestsRunUI.php

            ./../../console tests:run-ui --assume-artifacts --persist-fixture-data --plugin=$PLUGIN_NAME --extra-options="$UITEST_EXTRA_OPTIONS --screenshot-repo=$TRAVIS_REPO_SLUG"
        else
            ./../../console tests:run-ui --store-in-ui-tests-repo --persist-fixture-data --assume-artifacts --core --extra-options="$UITEST_EXTRA_OPTIONS"
        fi
    elif [ "$TEST_SUITE" = "AllTests" ]
    then
        travis_wait ./../../console tests:run --options="--colors"
    else
        if [ -n "$PLUGIN_NAME" ]
        then
            travis_wait phpunit --configuration phpunit.xml --colors --testsuite $TEST_SUITE --group $PLUGIN_NAME --coverage-clover $PIWIK_ROOT_DIR/build/logs/clover-$PLUGIN_NAME.xml $PHPUNIT_EXTRA_OPTIONS | tee phpunit.out
        else
            travis_wait phpunit --configuration phpunit.xml --testsuite $TEST_SUITE --colors $PHPUNIT_EXTRA_OPTIONS | tee phpunit.out
        fi

        exit_code="${PIPESTATUS[0]}"
        if [ "$exit_code" -ne "0" ]; then
            exit $exit_code
        elif grep "No tests executed" phpunit.out; then
            exit 1
        else
            exit 0
        fi
    fi
else
    if [ "$COVERAGE" = "Unit" ]
    then
        echo "Executing tests in test suite UnitTests..."
        phpunit --configuration phpunit.xml --testsuite UnitTests --colors --coverage-clover $TRAVIS_BUILD_DIR/build/logs/clover-unit.xml $PHPUNIT_EXTRA_OPTIONS || true
    elif [ "$COVERAGE" = "Integration" ]
    then
        echo "Executing tests in test suite IntegrationTests..."
        phpunit --configuration phpunit.xml --testsuite IntegrationTests --colors --coverage-clover $TRAVIS_BUILD_DIR/build/logs/clover-integration.xml $PHPUNIT_EXTRA_OPTIONS || true
    fi;
fi
