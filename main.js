'use strict';

document.addEventListener('DOMContentLoaded', function(){

	m.request({
		method: 'GET',
		url: './env.json',
		background: true
	}).then(function(ENV){

		var App = (function(){
			return {
				oninit: function(){
					m.request({
						method: 'GET',
						url: 'https://api.hubapi.com/deals/v1/deal/paged',
						data: ENV
					}).then(function(res){
						console.log(res)
					})
				},
				view:  function(){
					return [
						m('p', 'Hello')
					];
				}
			}
		})();

		m.mount(document.getElementById('app'), App);

	});

});
