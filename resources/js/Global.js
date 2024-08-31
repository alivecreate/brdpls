const Global = {
    baseUrl: window.location.protocol + '//' + window.location.hostname + (window.location.port ? ':' + window.location.port : ''),
    api: window.location.protocol + '//' + window.location.hostname + (window.location.port ? ':' + window.location.port : '') + '/api',
    admin: 'powerup',
};

window.api = Global.api;

console.log(Global.baseUrl); // Output: http://localhost:8000 (example)
console.log(Global.api);     // Output: http://localhost:8000/api (example)

export default Global;