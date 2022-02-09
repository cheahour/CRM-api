# Territories


## api/territories

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/territories" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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


## api/territories

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/territories" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"quisquam"}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (201):

```json
{
    "id": "ebb9453f-ccd3-429c-a7fd-c33e63f83b04",
    "name": "Setting A"
}
```
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


## api/territories/{territory}

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/territories/eum" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (201):

```json
{
    "id": "ebb9453f-ccd3-429c-a7fd-c33e63f83b04",
    "name": "Setting A"
}
```
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


## api/territories/{territory}

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/api/territories/eos" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"nihil"}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (201):

```json
true
```
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


## api/territories/{territory}

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/api/territories/itaque" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (201):

```json
true
```
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



