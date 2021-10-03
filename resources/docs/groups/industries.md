# Industries


## api/industries

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/industries" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (201):

```json
[
    {
        "id": "ebb9453f-ccd3-429c-a7fd-c33e63f83b04",
        "name": "Setting A"
    }
]
```
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


## api/industries

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/industries" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"nesciunt"}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (201):

```json
{
    "id": "ebb9453f-ccd3-429c-a7fd-c33e63f83b04",
    "name": "Setting A"
}
```
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


## api/industries/{industry}

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/industries/maiores" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (201):

```json
{
    "id": "ebb9453f-ccd3-429c-a7fd-c33e63f83b04",
    "name": "Setting A"
}
```
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


## api/industries/{industry}

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/api/industries/sit" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"ea"}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (201):

```json
true
```
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


## api/industries/{industry}

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/api/industries/sit" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (201):

```json
true
```
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
</form>



