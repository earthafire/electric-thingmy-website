<p>paste this command in minecraft: </p>

<p>/thingmy oauth set <span id="oauthcode"><span></p>

<script>
let hash = window.location.hash;
let params = hash.split("&");

for (let p of params) {
    if (p.startsWith("#access_token")) {
        let accesstoken = p.split("=")[1];
        let element = document.getElementById("oauthcode");
        element.innerHTML = accesstoken;
        break;
    }
}
</script>