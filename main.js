'use strict';

document.addEventListener('DOMContentLoaded', function(){

	m.request({
		method: 'GET',
		url: './env.json',
		background: true
	}).then(function(ENV){

		var App = (function(){
			return {
				view:  function(){
					return [
						m('ul', [
							m('li', 'Client id: ' + ENV.client_id),
							m('li', 'Client secret: ' + ENV.client_secret)
						])
					];
				}
			}
		})();

		m.mount(document.getElementById('app'), App);

	});

});
