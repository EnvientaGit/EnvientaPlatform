<?php
/**
 * view function mock for phpunit test
 * @param string $viewName
 * @param array $params
 * @return object
 */
function mockView(string $viewName, array $params = []) {
    $result = new stdClass();
    $result->viewName = $viewName;
    $result->params = $params;
    return $result;
}

/**
 * redirect function mock for phpunit test
 * @param string $url
 * @return string
 */
function mockRedirect(string $url) {
    $result = new stdClass();
    $result->redirect = $url;
    return $result;
}