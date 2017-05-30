document.addEventListener('DOMContentLoaded', function(){
	var App = (function(){

		return {
			view:  function(){
				return [
					m('p', 'Hello')
				];
			}
		}
	})();

	m.mount(document.getElementById('app'), App);
});
