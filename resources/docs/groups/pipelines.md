# Pipelines


## api/pipelines

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/pipelines" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (201):

```json
[
    {
        "id": "ebb9453f-ccd3-429c-a7fd-c33e63f83b04",
        "name": "Setting A",
        "score": 23
    }
]
```
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


## api/pipelines

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/pipelines" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"est"}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (201):

```json
{
    "id": "ebb9453f-ccd3-429c-a7fd-c33e63f83b04",
    "name": "Setting A",
    "score": 23
}
```
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


## api/pipelines/{pipeline}

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/pipelines/magnam" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (201):

```json
{
    "id": "ebb9453f-ccd3-429c-a7fd-c33e63f83b04",
    "name": "Setting A",
    "score": 23
}
```
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


## api/pipelines/{pipeline}

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/api/pipelines/ea" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"natus"}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (201):

```json
true
```
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


## api/pipelines/{pipeline}

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/api/pipelines/reiciendis" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (201):

```json
true
```
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
</form>



