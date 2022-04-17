
function mk_account(username, password, confirmation){
    if (password === confirmation){
        document.cookie = `username=${username}; password=${password};`
    }
}

function login(username, password){

}