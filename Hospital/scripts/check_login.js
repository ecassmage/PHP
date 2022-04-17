function is_logged_in(){
    let a = get_cookie_data();
    if (get(a, 'logged_in', '0') === '1'){
        document.querySelector('#login_credentials').textContent = 'sign out';
        document.querySelector('#login_link').onclick = sign_out;
    }else{
        console.log("signing out...")
        sign_out();
    }
    a = get_cookie_data();
    console.log(a['full_cookie']);
}

function get(dict, value, other){
    return (value in dict) ? dict[value]:other;
}

function get_cookie_data(){
    let a=document.cookie;
    let b = typeof(a);
    let decodedCookie = decodeURIComponent(document.cookie);
    let cookie_data = {'full_cookie': decodedCookie};
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') {
            c = c.substring(1);
        }
        cookie_data[c.substring(0, c.indexOf('='))] = c.substring(c.indexOf('=') + 1, c.length);
    }
    return cookie_data;
}

function sign_out() {
    document.querySelector('#login_credentials').textContent = 'login';
    document.querySelector('#login_link').onclick = log_in;
    document.cookie = 'logged_in=0; path=/';
}

function log_in(){
    document.querySelector('#login_link').href = 'login_page.php';
}