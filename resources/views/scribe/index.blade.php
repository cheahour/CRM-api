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
    -d '{"email":"est","password":"recusandae"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "est",
    "password": "recusandae"
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
<h2>api/logout</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://127.0.0.1:8000/api/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-DELETEapi-logout" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-logout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-logout"></code></pre>
</div>
<div id="execution-error-DELETEapi-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-logout"></code></pre>
</div>
<form id="form-DELETEapi-logout" data-method="DELETE" data-path="api/logout" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-logout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-logout" onclick="tryItOut('DELETEapi-logout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-logout" onclick="cancelTryOut('DELETEapi-logout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-logout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/logout</code></b>
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
</form>
<h2>/</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
    &lt;head&gt;
        &lt;meta charset="utf-8"&gt;
        &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;

        &lt;title&gt;Laravel&lt;/title&gt;

        &lt;!-- Fonts --&gt;
        &lt;link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&amp;display=swap" rel="stylesheet"&gt;

        &lt;!-- Styles --&gt;
        &lt;style&gt;
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        &lt;/style&gt;

        &lt;style&gt;
            body {
                font-family: 'Nunito', sans-serif;
            }
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body class="antialiased"&gt;
        &lt;div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0"&gt;

            &lt;div class="max-w-6xl mx-auto sm:px-6 lg:px-8"&gt;
                &lt;div class="flex justify-center pt-8 sm:justify-start sm:pt-0"&gt;
                    &lt;svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20"&gt;
                        &lt;g clip-path="url(#clip0)" fill="#EF3B2D"&gt;
                            &lt;path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/&gt;
                        &lt;/g&gt;
                    &lt;/svg&gt;
                &lt;/div&gt;

                &lt;div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg"&gt;
                    &lt;div class="grid grid-cols-1 md:grid-cols-2"&gt;
                        &lt;div class="p-6"&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"&gt;&lt;path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"&gt;&lt;/path&gt;&lt;/svg&gt;
                                &lt;div class="ml-4 text-lg leading-7 font-semibold"&gt;&lt;a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white"&gt;Documentation&lt;/a&gt;&lt;/div&gt;
                            &lt;/div&gt;

                            &lt;div class="ml-12"&gt;
                                &lt;div class="mt-2 text-gray-600 dark:text-gray-400 text-sm"&gt;
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l"&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"&gt;&lt;path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"&gt;&lt;/path&gt;&lt;path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"&gt;&lt;/path&gt;&lt;/svg&gt;
                                &lt;div class="ml-4 text-lg leading-7 font-semibold"&gt;&lt;a href="https://laracasts.com" class="underline text-gray-900 dark:text-white"&gt;Laracasts&lt;/a&gt;&lt;/div&gt;
                            &lt;/div&gt;

                            &lt;div class="ml-12"&gt;
                                &lt;div class="mt-2 text-gray-600 dark:text-gray-400 text-sm"&gt;
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class="p-6 border-t border-gray-200 dark:border-gray-700"&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"&gt;&lt;path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"&gt;&lt;/path&gt;&lt;/svg&gt;
                                &lt;div class="ml-4 text-lg leading-7 font-semibold"&gt;&lt;a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white"&gt;Laravel News&lt;/a&gt;&lt;/div&gt;
                            &lt;/div&gt;

                            &lt;div class="ml-12"&gt;
                                &lt;div class="mt-2 text-gray-600 dark:text-gray-400 text-sm"&gt;
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l"&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"&gt;&lt;path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"&gt;&lt;/path&gt;&lt;/svg&gt;
                                &lt;div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white"&gt;Vibrant Ecosystem&lt;/div&gt;
                            &lt;/div&gt;

                            &lt;div class="ml-12"&gt;
                                &lt;div class="mt-2 text-gray-600 dark:text-gray-400 text-sm"&gt;
                                    Laravel's robust library of first-party tools and libraries, such as &lt;a href="https://forge.laravel.com" class="underline"&gt;Forge&lt;/a&gt;, &lt;a href="https://vapor.laravel.com" class="underline"&gt;Vapor&lt;/a&gt;, &lt;a href="https://nova.laravel.com" class="underline"&gt;Nova&lt;/a&gt;, and &lt;a href="https://envoyer.io" class="underline"&gt;Envoyer&lt;/a&gt; help you take your projects to the next level. Pair them with powerful open source libraries like &lt;a href="https://laravel.com/docs/billing" class="underline"&gt;Cashier&lt;/a&gt;, &lt;a href="https://laravel.com/docs/dusk" class="underline"&gt;Dusk&lt;/a&gt;, &lt;a href="https://laravel.com/docs/broadcasting" class="underline"&gt;Echo&lt;/a&gt;, &lt;a href="https://laravel.com/docs/horizon" class="underline"&gt;Horizon&lt;/a&gt;, &lt;a href="https://laravel.com/docs/sanctum" class="underline"&gt;Sanctum&lt;/a&gt;, &lt;a href="https://laravel.com/docs/telescope" class="underline"&gt;Telescope&lt;/a&gt;, and more.
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;

                &lt;div class="flex justify-center mt-4 sm:items-center sm:justify-between"&gt;
                    &lt;div class="text-center text-sm text-gray-500 sm:text-left"&gt;
                        &lt;div class="flex items-center"&gt;
                            &lt;svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400"&gt;
                                &lt;path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"&gt;&lt;/path&gt;
                            &lt;/svg&gt;

                            &lt;a href="https://laravel.bigcartel.com" class="ml-1 underline"&gt;
                                Shop
                            &lt;/a&gt;

                            &lt;svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400"&gt;
                                &lt;path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"&gt;&lt;/path&gt;
                            &lt;/svg&gt;

                            &lt;a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline"&gt;
                                Sponsor
                            &lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;

                    &lt;div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0"&gt;
                        Laravel v8.62.0 (PHP v7.3.24-(to be removed in future macOS))
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>
<div id="execution-results-GET-" hidden>
    <blockquote>Received response<span id="execution-response-status-GET-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GET-"></code></pre>
</div>
<div id="execution-error-GET-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET-"></code></pre>
</div>
<form id="form-GET-" data-method="GET" data-path="/" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GET-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GET-" onclick="tryItOut('GET-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GET-" onclick="cancelTryOut('GET-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GET-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>/</code></b>
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
    -d '{"name":"non"}'
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
    "name": "non"
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
    -G "http://127.0.0.1:8000/api/industries/illo" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/industries/illo"
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
    "http://127.0.0.1:8000/api/industries/reprehenderit" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"vel"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/industries/reprehenderit"
);

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "vel"
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
    "http://127.0.0.1:8000/api/industries/error" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/industries/error"
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
    -d '{"name":"sit","score":"doloremque","pipelineId":"aut"}'
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
    "name": "sit",
    "score": "doloremque",
    "pipelineId": "aut"
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
<p>
<b><code>score</code></b>&nbsp;&nbsp;<small> </small>     <i>optional</i> &nbsp;
<input type="text" name="score" data-endpoint="POSTapi-kpi-activities" data-component="body"  hidden>
<br>
number
</p>
<p>
<b><code>pipelineId</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="pipelineId" data-endpoint="POSTapi-kpi-activities" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>api/kpi-activities/{kpi_activity}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/kpi-activities/sit" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/kpi-activities/sit"
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
    "http://127.0.0.1:8000/api/kpi-activities/nisi" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"praesentium","score":"vero","pipelineId":"et"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/kpi-activities/nisi"
);

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "praesentium",
    "score": "vero",
    "pipelineId": "et"
}

fetch(url, {
    method: "PUT",
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
<p>
<b><code>score</code></b>&nbsp;&nbsp;<small> </small>     <i>optional</i> &nbsp;
<input type="text" name="score" data-endpoint="PUTapi-kpi-activities--kpi_activity-" data-component="body"  hidden>
<br>
number
</p>
<p>
<b><code>pipelineId</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="pipelineId" data-endpoint="PUTapi-kpi-activities--kpi_activity-" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>api/kpi-activities/{kpi_activity}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://127.0.0.1:8000/api/kpi-activities/repellat" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/kpi-activities/repellat"
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
    -d '{"name":"repellat"}'
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
    "name": "repellat"
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
    -G "http://127.0.0.1:8000/api/packages/odit" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/packages/odit"
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
    "http://127.0.0.1:8000/api/packages/velit" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"praesentium"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/packages/velit"
);

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "praesentium"
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
    "http://127.0.0.1:8000/api/packages/magni" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/packages/magni"
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
    -d '{"name":"magni"}'
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
    "name": "magni"
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
    -G "http://127.0.0.1:8000/api/pipelines/ut" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/pipelines/ut"
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
    "http://127.0.0.1:8000/api/pipelines/doloribus" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"illum"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/pipelines/doloribus"
);

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "illum"
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
    "http://127.0.0.1:8000/api/pipelines/error" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/pipelines/error"
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
</form><h1>Sale management</h1>
<h2>api/sales</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://127.0.0.1:8000/api/sales" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"error","email":"quae","password":"corrupti","roleId":"voluptatem"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/sales"
);

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "error",
    "email": "quae",
    "password": "corrupti",
    "roleId": "voluptatem"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-sales" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-sales"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-sales"></code></pre>
</div>
<div id="execution-error-POSTapi-sales" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-sales"></code></pre>
</div>
<form id="form-POSTapi-sales" data-method="POST" data-path="api/sales" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {token}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-sales', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-sales" onclick="tryItOut('POSTapi-sales');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-sales" onclick="cancelTryOut('POSTapi-sales');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-sales" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/sales</code></b>
</p>
<p>
<label id="auth-POSTapi-sales" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-sales" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-sales" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-sales" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-sales" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>roleId</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="roleId" data-endpoint="POSTapi-sales" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>api/dsms</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/dsms" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"offset":"esse","limit":"eligendi"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/dsms"
);

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "offset": "esse",
    "limit": "eligendi"
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-dsms" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-dsms"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-dsms"></code></pre>
</div>
<div id="execution-error-GETapi-dsms" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-dsms"></code></pre>
</div>
<form id="form-GETapi-dsms" data-method="GET" data-path="api/dsms" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {token}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-dsms', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-dsms" onclick="tryItOut('GETapi-dsms');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-dsms" onclick="cancelTryOut('GETapi-dsms');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-dsms" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/dsms</code></b>
</p>
<p>
<label id="auth-GETapi-dsms" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-dsms" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>offset</code></b>&nbsp;&nbsp;<small> </small>     <i>optional</i> &nbsp;
<input type="text" name="offset" data-endpoint="GETapi-dsms" data-component="body"  hidden>
<br>
int
</p>
<p>
<b><code>limit</code></b>&nbsp;&nbsp;<small> </small>     <i>optional</i> &nbsp;
<input type="text" name="limit" data-endpoint="GETapi-dsms" data-component="body"  hidden>
<br>
int
</p>

</form>
<h2>api/sale-executives</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/sale-executives" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"dsmId":"vitae"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/sale-executives"
);

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "dsmId": "vitae"
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-sale-executives" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-sale-executives"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-sale-executives"></code></pre>
</div>
<div id="execution-error-GETapi-sale-executives" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-sale-executives"></code></pre>
</div>
<form id="form-GETapi-sale-executives" data-method="GET" data-path="api/sale-executives" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {token}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-sale-executives', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-sale-executives" onclick="tryItOut('GETapi-sale-executives');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-sale-executives" onclick="cancelTryOut('GETapi-sale-executives');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-sale-executives" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/sale-executives</code></b>
</p>
<p>
<label id="auth-GETapi-sale-executives" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-sale-executives" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>dsmId</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="dsmId" data-endpoint="GETapi-sale-executives" data-component="body" required  hidden>
<br>

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
    -d '{"name":"quisquam"}'
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
    "name": "quisquam"
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
    -G "http://127.0.0.1:8000/api/territories/eum" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/territories/eum"
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
    "http://127.0.0.1:8000/api/territories/eos" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"nihil"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/territories/eos"
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
    "http://127.0.0.1:8000/api/territories/itaque" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/territories/itaque"
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