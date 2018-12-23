  'use strict';
  /**
   * @ngdoc service
   * @name hirecoworkerApp.moneyTransferAccount
   * @description
   * # moneyTransferAccount
   * Factory in the hirecoworkerApp.
   */
  angular.module('hirecoworkerApp')
      .factory('moneyTransferAccount', ['$resource', function($resource) {
          return $resource('/api/v1/users/:user_id/money_transfer_accounts/:account', {}, {
              get: {
                  method: 'GET',
                  params: {
                      user_id: '@user_id'
                  }
              },
              save: {
                  method: 'POST',
                  params: {
                      user_id: '@user_id'
                  }
              },
              delete: {
                  method: 'DELETE',
                  params: {
                      user_id: '@user_id',
                      account: '@account'
                  }
              },
              put: {
                  method: 'PUT',
                  params: {
                      userId: '@userId',
                      account: '@account'
                  }
              }
          });
  }]);