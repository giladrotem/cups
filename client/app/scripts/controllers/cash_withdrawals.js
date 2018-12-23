'use strict';
/**
 * @ngdoc function
 * @name getlancerApp.controller:CashWithdrawalsController
 * @description
 * # CashWithdrawalsController
 * Controller of the getlancerApp
 */
angular.module('hirecoworkerApp')
    .controller('RevenueCashWithdrawalsController', ['$scope', '$cookies','$rootScope', '$state',  function($scope, $cookies, $rootScope, $state) {
        $scope.title= 'Revenue withdrawals';
        if($rootScope.isAuth && parseInt($rootScope.auth.is_profile_updated) === 0){
            $state.go('user_profile',{type:'personal'});
        }
        $rootScope.subHeader = "Account"; //for setting active class for subheader
        $cookies.put('subHeader', $rootScope.subHeader);
        $rootScope.gotoHeader();
            // $rootScope.url_split = $location.path().split("/")[2];
        // /*jshint -W117 */
        // $rootScope.header = $rootScope.settings.SITE_NAME + ' | ' + $filter("translate")("Cash Withdrawals");
        // $scope.minimum_withdraw_amount = $rootScope.settings.USER_MINIMUM_WITHDRAW_AMOUNT;
        // $scope.maximum_withdraw_amount = $rootScope.settings.USER_MAXIMUM_WITHDRAW_AMOUNT;
        // $scope.user_available_balance = $rootScope.user.available_wallet_amount;
        // $scope.withDrawAmount = 200; 
        // $scope.mul = $scope.withDrawAmount * $rootScope.settings.WITHDRAW_REQUEST_FEE;
        // $scope.ExampleAmount = $scope.withDrawAmount - $rootScope.settings.WITHDRAW_REQUEST_FEE;
        // $scope.total = $scope.mul / 100;
        // $scope.account_error = false;
        // var params = {};
        // params.user_id = $rootScope.user.id;
        // $scope.index = function() {
        //     $scope.loader = true;
        //     UserMeFactory.get({}, function(response) {
        //         $scope.user_available_balance = response.data.available_wallet_amount;
        //         if (parseInt($scope.user_available_balance) === 0) {
        //              $scope.getMyuser();
        //             $scope.is_show_wallet_paybtn = false;
        //         } else {
        //             $scope.is_show_wallet_paybtn = true;
        //         }
        //     });
        //     cashWithdrawals.get(params, function(response) {
        //         if (angular.isDefined(response.data)) {
        //             $scope.cashWithdrawalsList = response.data;
        //         }
        //         $scope.loader = false;
        //     });
        //     moneyTransferAccount.get(params, function(response) {
        //         if (angular.isDefined(response.data)) {
        //             $scope.moneyTransferList = response.data;
        //         }
        //     });
        // };
        // $scope.selectedAcc = function(id) {
        //     $scope.account_id = id;
        //     $scope.account_error = false;
        // };
        // $scope.getMyuser = function() {
        //     if ($rootScope.isAuth) {
        //         myUserFactory.get(function(response) {
        //             $scope.my_user = response.data;
        //         });
        //     }
        // };
        // $scope.userCashWithdrawSubmit = function($valid) {
        //     if ($scope.account_id === undefined) {
        //         $scope.account_error = true;
        //     } else {
        //         $scope.account_error = false;
        //     }
        //     if ($valid && $scope.account_error === false) {
        //         $scope.amount = parseFloat($('#amount').val());
        //         if (parseFloat($scope.user_available_balance) > $scope.amount) {
        //             params.amount = $scope.amount;
        //             params.money_transfer_account_id = $scope.account_id;
        //             params.remark = "";
        //             cashWithdrawals.save(params, function(response) {
        //                 if (response.error.code === 0) {
        //                     $scope.my_user.available_wallet_amount = $scope.my_user.available_wallet_amount - parseInt($scope.amount);
        //                     //    document.getElementById("user_available_wallet_amount").innerHTML = $filter("customCurrency")($scope.my_user.available_wallet_amount);
        //                     flash.set($filter("translate")("Your request submitted successfully."), 'success', true);
        //                     $state.reload();
        //                 }
        //             }, function() {
        //                 flash.set($filter("translate")("Withdraw request could not be added"), 'error', false);
        //             });
        //         } else {
        //             flash.set("You Dont have sufficient amount in your wallet.", "error", false);
        //         }
        //     }
        // };
        // $scope.index();
    }]);