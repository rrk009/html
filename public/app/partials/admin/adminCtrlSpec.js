/**
 * @module test.evezownapp
 * @name adminCtrl
 * @description
 * Tests for adminCtrl under evezownapp
 * _Enter the test description._
 * */


describe('Controller: evezownapp.adminCtrl', function () {

    // load the controller's module
    beforeEach(module('evezownapp'));

    var ctrl,
        scope;

    // Initialize the controller and a mock scope
    beforeEach(inject(function ($controller, $rootScope) {
        scope = $rootScope.$new();
        ctrl = $controller('adminCtrl', {
            $scope: scope
        });
    }));

    it('should be defined', function () {
        expect(ctrl).toBeDefined();
    });
});
