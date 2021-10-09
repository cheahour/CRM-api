<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Today CRM api</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/style.css") }}" media="screen" />
        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/print.css") }}" media="print" />
        <script src="{{ asset("vendor/scribe/js/all.js") }}"></script>

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/highlight-darcula.css") }}" media="" />
        <script src="{{ asset("vendor/scribe/js/highlight.pack.js") }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</head>

<body class="" data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">
<a href="#" id="nav-button">
      <span>
        NAV
            <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="-image" class=""/>
      </span>
</a>
<div class="tocify-wrapper">
                <div class="lang-selector">
                            <a href="#" data-language-name="bash">bash</a>
                            <a href="#" data-language-name="javascript">javascript</a>
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI (Swagger) spec</a></li>
                            <li><a href='http://github.com/knuckleswtf/scribe'>Documentation powered by Scribe ✍</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: October 3 2021</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
<script>
    var baseUrl = "http://127.0.0.1:8000";
</script>
<script src="{{ asset("vendor/scribe/js/tryitout-2.7.10.js") }}"></script>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://127.0.0.1:8000</code></pre><h1>Authenticating requests</h1>
<p>Authenticate requests to this API's endpoints by sending an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can retrieve your token by visiting your dashboard and clicking <b>Generate API token</b>.</p><h1>Authentication</h1>
<h2>api/login</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://127.0.0.1:8000/api/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"ipsam","password":"quia"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "ipsam",
    "password": "quia"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"></code></pre>
</div>
<div id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login"></code></pre>
</div>
<form id="form-POSTapi-login" data-method="POST" data-path="api/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-login" onclick="tryItOut('POSTapi-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-login" onclick="cancelTryOut('POSTapi-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/login</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-login" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-login" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>api/users</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://127.0.0.1:8000/api/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-DELETEapi-users" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-users"></code></pre>
</div>
<div id="execution-error-DELETEapi-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-users"></code></pre>
</div>
<form id="form-DELETEapi-users" data-method="DELETE" data-path="api/users" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-users" onclick="tryItOut('DELETEapi-users');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-users" onclick="cancelTryOut('DELETEapi-users');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-users" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/users</code></b>
</p>
</form><h1>Endpoints</h1>
<h2>Return an empty response simply to trigger the storage of the CSRF cookie in the browser.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/sanctum/csrf-cookie" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/sanctum/csrf-cookie"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-GETsanctum-csrf-cookie" hidden>
    <blockquote>Received response<span id="execution-response-status-GETsanctum-csrf-cookie"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETsanctum-csrf-cookie"></code></pre>
</div>
<div id="execution-error-GETsanctum-csrf-cookie" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETsanctum-csrf-cookie"></code></pre>
</div>
<form id="form-GETsanctum-csrf-cookie" data-method="GET" data-path="sanctum/csrf-cookie" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETsanctum-csrf-cookie', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETsanctum-csrf-cookie" onclick="tryItOut('GETsanctum-csrf-cookie');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETsanctum-csrf-cookie" onclick="cancelTryOut('GETsanctum-csrf-cookie');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETsanctum-csrf-cookie" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>sanctum/csrf-cookie</code></b>
</p>
</form><h1>Industries</h1>
<h2>api/industries</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/industries" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/industries"
);

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">[
    {
        "id": "ebb9453f-ccd3-429c-a7fd-c33e63f83b04",
        "name": "Setting A"
    }
]</code></pre>
<div id="execution-results-GETapi-industries" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-industries"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-industries"></code></pre>
</div>
<div id="execution-error-GETapi-industries" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-industries"></code></pre>
</div>
<form id="form-GETapi-industries" data-method="GET" data-path="api/industries" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {token}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-industries', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-industries" onclick="tryItOut('GETapi-industries');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-industries" onclick="cancelTryOut('GETapi-industries');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-industries" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/industries</code></b>
</p>
<p>
<label id="auth-GETapi-industries" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-industries" data-component="header"></label>
</p>
</form>
<h2>api/industries</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://127.0.0.1:8000/api/industries" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"nesciunt"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/industries"
);

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "nesciunt"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "id": "ebb9453f-ccd3-429c-a7fd-c33e63f83b04",
    "name": "Setting A"
}</code></pre>
<div id="execution-results-POSTapi-industries" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-industries"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-industries"></code></pre>
</div>
<div id="execution-error-POSTapi-industries" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-industries"></code></pre>
</div>
<form id="form-POSTapi-industries" data-method="POST" data-path="api/industries" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {token}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-industries', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-industries" onclick="tryItOut('POSTapi-industries');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-industries" onclick="cancelTryOut('POSTapi-industries');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-industries" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/industries</code></b>
</p>
<p>
<label id="auth-POSTapi-industries" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-industries" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-industries" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>api/industries/{industry}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/industries/maiores" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/industries/maiores"
);

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "id": "ebb9453f-ccd3-429c-a7fd-c33e63f83b04",
    "name": "Setting A"
}</code></pre>
<div id="execution-results-GETapi-industries--industry-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-industries--industry-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-industries--industry-"></code></pre>
</div>
<div id="execution-error-GETapi-industries--industry-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-industries--industry-"></code></pre>
</div>
<form id="form-GETapi-industries--industry-" data-method="GET" data-path="api/industries/{industry}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {token}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-industries--industry-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-industries--industry-" onclick="tryItOut('GETapi-industries--industry-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-industries--industry-" onclick="cancelTryOut('GETapi-industries--industry-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-industries--industry-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/industries/{industry}</code></b>
</p>
<p>
<label id="auth-GETapi-industries--industry-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-industries--industry-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>industry</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="industry" data-endpoint="GETapi-industries--industry-" data-component="url" required  hidden>
<br>

</p>
</form>
<h2>api/industries/{industry}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://127.0.0.1:8000/api/industries/sit" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"ea"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/industries/sit"
);

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "ea"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">true</code></pre>
<div id="execution-results-PUTapi-industries--industry-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-industries--industry-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-industries--industry-"></code></pre>
</div>
<div id="execution-error-PUTapi-industries--industry-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-industries--industry-"></code></pre>
</div>
<form id="form-PUTapi-industries--industry-" data-method="PUT" data-path="api/industries/{industry}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {token}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-industries--industry-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-industries--industry-" onclick="tryItOut('PUTapi-industries--industry-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-industries--industry-" onclick="cancelTryOut('PUTapi-industries--industry-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-industries--industry-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/industries/{industry}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/industries/{industry}</code></b>
</p>
<p>
<label id="auth-PUTapi-industries--industry-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-industries--industry-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>industry</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="industry" data-endpoint="PUTapi-industries--industry-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-industries--industry-" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>api/industries/{industry}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://127.0.0.1:8000/api/industries/sit" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/industries/sit"
);

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">true</code></pre>
<div id="execution-results-DELETEapi-industries--industry-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-industries--industry-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-industries--industry-"></code></pre>
</div>
<div id="execution-error-DELETEapi-industries--industry-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-industries--industry-"></code></pre>
</div>
<form id="form-DELETEapi-industries--industry-" data-method="DELETE" data-path="api/industries/{industry}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {token}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-industries--industry-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-industries--industry-" onclick="tryItOut('DELETEapi-industries--industry-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-industries--industry-" onclick="cancelTryOut('DELETEapi-industries--industry-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-industries--industry-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/industries/{industry}</code></b>
</p>
<p>
<label id="auth-DELETEapi-industries--industry-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-industries--industry-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>industry</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="industry" data-endpoint="DELETEapi-industries--industry-" data-component="url" required  hidden>
<br>

</p>
</form><h1>KPI Activities</h1>
<h2>api/kpi-activities</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/kpi-activities" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/kpi-activities"
);

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">[
    {
        "id": "ebb9453f-ccd3-429c-a7fd-c33e63f83b04",
        "name": "Setting A"
    }
]</code></pre>
<div id="execution-results-GETapi-kpi-activities" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-kpi-activities"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-kpi-activities"></code></pre>
</div>
<div id="execution-error-GETapi-kpi-activities" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-kpi-activities"></code></pre>
</div>
<form id="form-GETapi-kpi-activities" data-method="GET" data-path="api/kpi-activities" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {token}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-kpi-activities', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-kpi-activities" onclick="tryItOut('GETapi-kpi-activities');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-kpi-activities" onclick="cancelTryOut('GETapi-kpi-activities');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-kpi-activities" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/kpi-activities</code></b>
</p>
<p>
<label id="auth-GETapi-kpi-activities" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-kpi-activities" data-component="header"></label>
</p>
</form>
<h2>api/kpi-activities</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://127.0.0.1:8000/api/kpi-activities" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"quae"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/kpi-activities"
);

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "quae"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "id": "ebb9453f-ccd3-429c-a7fd-c33e63f83b04",
    "name": "Setting A"
}</code></pre>
<div id="execution-results-POSTapi-kpi-activities" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-kpi-activities"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-kpi-activities"></code></pre>
</div>
<div id="execution-error-POSTapi-kpi-activities" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-kpi-activities"></code></pre>
</div>
<form id="form-POSTapi-kpi-activities" data-method="POST" data-path="api/kpi-activities" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {token}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-kpi-activities', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-kpi-activities" onclick="tryItOut('POSTapi-kpi-activities');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-kpi-activities" onclick="cancelTryOut('POSTapi-kpi-activities');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-kpi-activities" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/kpi-activities</code></b>
</p>
<p>
<label id="auth-POSTapi-kpi-activities" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-kpi-activities" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-kpi-activities" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>api/kpi-activities/{kpi_activity}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/kpi-activities/explicabo" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/kpi-activities/explicabo"
);

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "id": "ebb9453f-ccd3-429c-a7fd-c33e63f83b04",
    "name": "Setting A"
}</code></pre>
<div id="execution-results-GETapi-kpi-activities--kpi_activity-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-kpi-activities--kpi_activity-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-kpi-activities--kpi_activity-"></code></pre>
</div>
<div id="execution-error-GETapi-kpi-activities--kpi_activity-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-kpi-activities--kpi_activity-"></code></pre>
</div>
<form id="form-GETapi-kpi-activities--kpi_activity-" data-method="GET" data-path="api/kpi-activities/{kpi_activity}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {token}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-kpi-activities--kpi_activity-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-kpi-activities--kpi_activity-" onclick="tryItOut('GETapi-kpi-activities--kpi_activity-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-kpi-activities--kpi_activity-" onclick="cancelTryOut('GETapi-kpi-activities--kpi_activity-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-kpi-activities--kpi_activity-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/kpi-activities/{kpi_activity}</code></b>
</p>
<p>
<label id="auth-GETapi-kpi-activities--kpi_activity-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-kpi-activities--kpi_activity-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>kpi_activity</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="kpi_activity" data-endpoint="GETapi-kpi-activities--kpi_activity-" data-component="url" required  hidden>
<br>

</p>
</form>
<h2>api/kpi-activities/{kpi_activity}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://127.0.0.1:8000/api/kpi-activities/quod" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"voluptas"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/kpi-activities/quod"
);

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "voluptas"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">true</code></pre>
<div id="execution-results-PUTapi-kpi-activities--kpi_activity-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-kpi-activities--kpi_activity-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-kpi-activities--kpi_activity-"></code></pre>
</div>
<div id="execution-error-PUTapi-kpi-activities--kpi_activity-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-kpi-activities--kpi_activity-"></code></pre>
</div>
<form id="form-PUTapi-kpi-activities--kpi_activity-" data-method="PUT" data-path="api/kpi-activities/{kpi_activity}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {token}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-kpi-activities--kpi_activity-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-kpi-activities--kpi_activity-" onclick="tryItOut('PUTapi-kpi-activities--kpi_activity-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-kpi-activities--kpi_activity-" onclick="cancelTryOut('PUTapi-kpi-activities--kpi_activity-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-kpi-activities--kpi_activity-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/kpi-activities/{kpi_activity}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/kpi-activities/{kpi_activity}</code></b>
</p>
<p>
<label id="auth-PUTapi-kpi-activities--kpi_activity-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-kpi-activities--kpi_activity-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>kpi_activity</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="kpi_activity" data-endpoint="PUTapi-kpi-activities--kpi_activity-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-kpi-activities--kpi_activity-" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>api/kpi-activities/{kpi_activity}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://127.0.0.1:8000/api/kpi-activities/unde" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/kpi-activities/unde"
);

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">true</code></pre>
<div id="execution-results-DELETEapi-kpi-activities--kpi_activity-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-kpi-activities--kpi_activity-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-kpi-activities--kpi_activity-"></code></pre>
</div>
<div id="execution-error-DELETEapi-kpi-activities--kpi_activity-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-kpi-activities--kpi_activity-"></code></pre>
</div>
<form id="form-DELETEapi-kpi-activities--kpi_activity-" data-method="DELETE" data-path="api/kpi-activities/{kpi_activity}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {token}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-kpi-activities--kpi_activity-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-kpi-activities--kpi_activity-" onclick="tryItOut('DELETEapi-kpi-activities--kpi_activity-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-kpi-activities--kpi_activity-" onclick="cancelTryOut('DELETEapi-kpi-activities--kpi_activity-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-kpi-activities--kpi_activity-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/kpi-activities/{kpi_activity}</code></b>
</p>
<p>
<label id="auth-DELETEapi-kpi-activities--kpi_activity-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-kpi-activities--kpi_activity-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>kpi_activity</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="kpi_activity" data-endpoint="DELETEapi-kpi-activities--kpi_activity-" data-component="url" required  hidden>
<br>

</p>
</form><h1>Packages</h1>
<h2>api/packages</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/packages" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/packages"
);

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">[
    {
        "id": "ebb9453f-ccd3-429c-a7fd-c33e63f83b04",
        "name": "Setting A"
    }
]</code></pre>
<div id="execution-results-GETapi-packages" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-packages"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-packages"></code></pre>
</div>
<div id="execution-error-GETapi-packages" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-packages"></code></pre>
</div>
<form id="form-GETapi-packages" data-method="GET" data-path="api/packages" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {token}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-packages', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-packages" onclick="tryItOut('GETapi-packages');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-packages" onclick="cancelTryOut('GETapi-packages');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-packages" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/packages</code></b>
</p>
<p>
<label id="auth-GETapi-packages" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-packages" data-component="header"></label>
</p>
</form>
<h2>api/packages</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://127.0.0.1:8000/api/packages" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"iste"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/packages"
);

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "iste"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "id": "ebb9453f-ccd3-429c-a7fd-c33e63f83b04",
    "name": "Setting A"
}</code></pre>
<div id="execution-results-POSTapi-packages" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-packages"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-packages"></code></pre>
</div>
<div id="execution-error-POSTapi-packages" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-packages"></code></pre>
</div>
<form id="form-POSTapi-packages" data-method="POST" data-path="api/packages" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {token}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-packages', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-packages" onclick="tryItOut('POSTapi-packages');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-packages" onclick="cancelTryOut('POSTapi-packages');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-packages" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/packages</code></b>
</p>
<p>
<label id="auth-POSTapi-packages" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-packages" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-packages" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>api/packages/{package}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/packages/vero" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/packages/vero"
);

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "id": "ebb9453f-ccd3-429c-a7fd-c33e63f83b04",
    "name": "Setting A"
}</code></pre>
<div id="execution-results-GETapi-packages--package-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-packages--package-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-packages--package-"></code></pre>
</div>
<div id="execution-error-GETapi-packages--package-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-packages--package-"></code></pre>
</div>
<form id="form-GETapi-packages--package-" data-method="GET" data-path="api/packages/{package}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {token}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-packages--package-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-packages--package-" onclick="tryItOut('GETapi-packages--package-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-packages--package-" onclick="cancelTryOut('GETapi-packages--package-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-packages--package-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/packages/{package}</code></b>
</p>
<p>
<label id="auth-GETapi-packages--package-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-packages--package-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>package</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="package" data-endpoint="GETapi-packages--package-" data-component="url" required  hidden>
<br>

</p>
</form>
<h2>api/packages/{package}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://127.0.0.1:8000/api/packages/impedit" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"incidunt"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/packages/impedit"
);

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "incidunt"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">true</code></pre>
<div id="execution-results-PUTapi-packages--package-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-packages--package-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-packages--package-"></code></pre>
</div>
<div id="execution-error-PUTapi-packages--package-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-packages--package-"></code></pre>
</div>
<form id="form-PUTapi-packages--package-" data-method="PUT" data-path="api/packages/{package}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {token}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-packages--package-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-packages--package-" onclick="tryItOut('PUTapi-packages--package-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-packages--package-" onclick="cancelTryOut('PUTapi-packages--package-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-packages--package-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/packages/{package}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/packages/{package}</code></b>
</p>
<p>
<label id="auth-PUTapi-packages--package-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-packages--package-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>package</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="package" data-endpoint="PUTapi-packages--package-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-packages--package-" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>api/packages/{package}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://127.0.0.1:8000/api/packages/repellat" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/packages/repellat"
);

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">true</code></pre>
<div id="execution-results-DELETEapi-packages--package-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-packages--package-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-packages--package-"></code></pre>
</div>
<div id="execution-error-DELETEapi-packages--package-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-packages--package-"></code></pre>
</div>
<form id="form-DELETEapi-packages--package-" data-method="DELETE" data-path="api/packages/{package}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {token}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-packages--package-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-packages--package-" onclick="tryItOut('DELETEapi-packages--package-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-packages--package-" onclick="cancelTryOut('DELETEapi-packages--package-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-packages--package-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/packages/{package}</code></b>
</p>
<p>
<label id="auth-DELETEapi-packages--package-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-packages--package-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>package</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="package" data-endpoint="DELETEapi-packages--package-" data-component="url" required  hidden>
<br>

</p>
</form><h1>Pipelines</h1>
<h2>api/pipelines</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/pipelines" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/pipelines"
);

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">[
    {
        "id": "ebb9453f-ccd3-429c-a7fd-c33e63f83b04",
        "name": "Setting A",
        "score": 23
    }
]</code></pre>
<div id="execution-results-GETapi-pipelines" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-pipelines"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-pipelines"></code></pre>
</div>
<div id="execution-error-GETapi-pipelines" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-pipelines"></code></pre>
</div>
<form id="form-GETapi-pipelines" data-method="GET" data-path="api/pipelines" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {token}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-pipelines', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-pipelines" onclick="tryItOut('GETapi-pipelines');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-pipelines" onclick="cancelTryOut('GETapi-pipelines');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-pipelines" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/pipelines</code></b>
</p>
<p>
<label id="auth-GETapi-pipelines" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-pipelines" data-component="header"></label>
</p>
</form>
<h2>api/pipelines</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://127.0.0.1:8000/api/pipelines" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"est"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/pipelines"
);

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "est"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "id": "ebb9453f-ccd3-429c-a7fd-c33e63f83b04",
    "name": "Setting A",
    "score": 23
}</code></pre>
<div id="execution-results-POSTapi-pipelines" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-pipelines"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-pipelines"></code></pre>
</div>
<div id="execution-error-POSTapi-pipelines" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-pipelines"></code></pre>
</div>
<form id="form-POSTapi-pipelines" data-method="POST" data-path="api/pipelines" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {token}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-pipelines', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-pipelines" onclick="tryItOut('POSTapi-pipelines');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-pipelines" onclick="cancelTryOut('POSTapi-pipelines');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-pipelines" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/pipelines</code></b>
</p>
<p>
<label id="auth-POSTapi-pipelines" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-pipelines" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-pipelines" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>api/pipelines/{pipeline}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/pipelines/magnam" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/pipelines/magnam"
);

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "id": "ebb9453f-ccd3-429c-a7fd-c33e63f83b04",
    "name": "Setting A",
    "score": 23
}</code></pre>
<div id="execution-results-GETapi-pipelines--pipeline-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-pipelines--pipeline-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-pipelines--pipeline-"></code></pre>
</div>
<div id="execution-error-GETapi-pipelines--pipeline-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-pipelines--pipeline-"></code></pre>
</div>
<form id="form-GETapi-pipelines--pipeline-" data-method="GET" data-path="api/pipelines/{pipeline}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {token}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-pipelines--pipeline-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-pipelines--pipeline-" onclick="tryItOut('GETapi-pipelines--pipeline-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-pipelines--pipeline-" onclick="cancelTryOut('GETapi-pipelines--pipeline-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-pipelines--pipeline-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/pipelines/{pipeline}</code></b>
</p>
<p>
<label id="auth-GETapi-pipelines--pipeline-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-pipelines--pipeline-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>pipeline</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="pipeline" data-endpoint="GETapi-pipelines--pipeline-" data-component="url" required  hidden>
<br>

</p>
</form>
<h2>api/pipelines/{pipeline}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://127.0.0.1:8000/api/pipelines/ea" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"natus"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/pipelines/ea"
);

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "natus"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">true</code></pre>
<div id="execution-results-PUTapi-pipelines--pipeline-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-pipelines--pipeline-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-pipelines--pipeline-"></code></pre>
</div>
<div id="execution-error-PUTapi-pipelines--pipeline-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-pipelines--pipeline-"></code></pre>
</div>
<form id="form-PUTapi-pipelines--pipeline-" data-method="PUT" data-path="api/pipelines/{pipeline}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {token}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-pipelines--pipeline-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-pipelines--pipeline-" onclick="tryItOut('PUTapi-pipelines--pipeline-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-pipelines--pipeline-" onclick="cancelTryOut('PUTapi-pipelines--pipeline-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-pipelines--pipeline-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/pipelines/{pipeline}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/pipelines/{pipeline}</code></b>
</p>
<p>
<label id="auth-PUTapi-pipelines--pipeline-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-pipelines--pipeline-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>pipeline</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="pipeline" data-endpoint="PUTapi-pipelines--pipeline-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-pipelines--pipeline-" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>api/pipelines/{pipeline}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://127.0.0.1:8000/api/pipelines/reiciendis" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/pipelines/reiciendis"
);

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">true</code></pre>
<div id="execution-results-DELETEapi-pipelines--pipeline-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-pipelines--pipeline-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-pipelines--pipeline-"></code></pre>
</div>
<div id="execution-error-DELETEapi-pipelines--pipeline-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-pipelines--pipeline-"></code></pre>
</div>
<form id="form-DELETEapi-pipelines--pipeline-" data-method="DELETE" data-path="api/pipelines/{pipeline}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {token}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-pipelines--pipeline-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-pipelines--pipeline-" onclick="tryItOut('DELETEapi-pipelines--pipeline-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-pipelines--pipeline-" onclick="cancelTryOut('DELETEapi-pipelines--pipeline-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-pipelines--pipeline-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/pipelines/{pipeline}</code></b>
</p>
<p>
<label id="auth-DELETEapi-pipelines--pipeline-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-pipelines--pipeline-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>pipeline</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="pipeline" data-endpoint="DELETEapi-pipelines--pipeline-" data-component="url" required  hidden>
<br>

</p>
</form><h1>Roles</h1>
<h2>api/roles</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/roles" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/roles"
);

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">[
    {
        "id": "ebb9453f-ccd3-429c-a7fd-c33e63f83b04",
        "name": "Sale"
    }
]</code></pre>
<div id="execution-results-GETapi-roles" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-roles"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-roles"></code></pre>
</div>
<div id="execution-error-GETapi-roles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-roles"></code></pre>
</div>
<form id="form-GETapi-roles" data-method="GET" data-path="api/roles" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {token}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-roles', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-roles" onclick="tryItOut('GETapi-roles');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-roles" onclick="cancelTryOut('GETapi-roles');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-roles" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/roles</code></b>
</p>
<p>
<label id="auth-GETapi-roles" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-roles" data-component="header"></label>
</p>
</form><h1>Territories</h1>
<h2>api/territories</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/territories" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/territories"
);

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">[
    {
        "id": "ebb9453f-ccd3-429c-a7fd-c33e63f83b04",
        "name": "Setting A"
    }
]</code></pre>
<div id="execution-results-GETapi-territories" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-territories"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-territories"></code></pre>
</div>
<div id="execution-error-GETapi-territories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-territories"></code></pre>
</div>
<form id="form-GETapi-territories" data-method="GET" data-path="api/territories" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {token}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-territories', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-territories" onclick="tryItOut('GETapi-territories');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-territories" onclick="cancelTryOut('GETapi-territories');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-territories" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/territories</code></b>
</p>
<p>
<label id="auth-GETapi-territories" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-territories" data-component="header"></label>
</p>
</form>
<h2>api/territories</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://127.0.0.1:8000/api/territories" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"consequatur"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/territories"
);

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "consequatur"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "id": "ebb9453f-ccd3-429c-a7fd-c33e63f83b04",
    "name": "Setting A"
}</code></pre>
<div id="execution-results-POSTapi-territories" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-territories"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-territories"></code></pre>
</div>
<div id="execution-error-POSTapi-territories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-territories"></code></pre>
</div>
<form id="form-POSTapi-territories" data-method="POST" data-path="api/territories" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {token}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-territories', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-territories" onclick="tryItOut('POSTapi-territories');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-territories" onclick="cancelTryOut('POSTapi-territories');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-territories" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/territories</code></b>
</p>
<p>
<label id="auth-POSTapi-territories" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-territories" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-territories" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>api/territories/{territory}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/territories/harum" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/territories/harum"
);

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "id": "ebb9453f-ccd3-429c-a7fd-c33e63f83b04",
    "name": "Setting A"
}</code></pre>
<div id="execution-results-GETapi-territories--territory-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-territories--territory-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-territories--territory-"></code></pre>
</div>
<div id="execution-error-GETapi-territories--territory-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-territories--territory-"></code></pre>
</div>
<form id="form-GETapi-territories--territory-" data-method="GET" data-path="api/territories/{territory}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {token}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-territories--territory-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-territories--territory-" onclick="tryItOut('GETapi-territories--territory-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-territories--territory-" onclick="cancelTryOut('GETapi-territories--territory-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-territories--territory-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/territories/{territory}</code></b>
</p>
<p>
<label id="auth-GETapi-territories--territory-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-territories--territory-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>territory</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="territory" data-endpoint="GETapi-territories--territory-" data-component="url" required  hidden>
<br>

</p>
</form>
<h2>api/territories/{territory}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://127.0.0.1:8000/api/territories/consequatur" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"nihil"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/territories/consequatur"
);

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "nihil"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">true</code></pre>
<div id="execution-results-PUTapi-territories--territory-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-territories--territory-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-territories--territory-"></code></pre>
</div>
<div id="execution-error-PUTapi-territories--territory-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-territories--territory-"></code></pre>
</div>
<form id="form-PUTapi-territories--territory-" data-method="PUT" data-path="api/territories/{territory}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {token}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-territories--territory-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-territories--territory-" onclick="tryItOut('PUTapi-territories--territory-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-territories--territory-" onclick="cancelTryOut('PUTapi-territories--territory-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-territories--territory-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/territories/{territory}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/territories/{territory}</code></b>
</p>
<p>
<label id="auth-PUTapi-territories--territory-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-territories--territory-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>territory</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="territory" data-endpoint="PUTapi-territories--territory-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-territories--territory-" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>api/territories/{territory}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://127.0.0.1:8000/api/territories/corrupti" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/territories/corrupti"
);

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">true</code></pre>
<div id="execution-results-DELETEapi-territories--territory-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-territories--territory-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-territories--territory-"></code></pre>
</div>
<div id="execution-error-DELETEapi-territories--territory-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-territories--territory-"></code></pre>
</div>
<form id="form-DELETEapi-territories--territory-" data-method="DELETE" data-path="api/territories/{territory}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {token}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-territories--territory-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-territories--territory-" onclick="tryItOut('DELETEapi-territories--territory-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-territories--territory-" onclick="cancelTryOut('DELETEapi-territories--territory-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-territories--territory-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/territories/{territory}</code></b>
</p>
<p>
<label id="auth-DELETEapi-territories--territory-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-territories--territory-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>territory</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="territory" data-endpoint="DELETEapi-territories--territory-" data-component="url" required  hidden>
<br>

</p>
</form>
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var languages = ["bash","javascript"];
        setupLanguages(languages);
    });
</script>
</body>
</html>