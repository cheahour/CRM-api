# KPI Activities


## api/kpi-activities

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/kpi-activities" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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


## api/kpi-activities

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/kpi-activities" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"sit","score":"doloremque","pipelineId":"aut"}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (201):

```json
{
    "id": "ebb9453f-ccd3-429c-a7fd-c33e63f83b04",
    "name": "Setting A"
}
```
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


## api/kpi-activities/{kpi_activity}

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/kpi-activities/sit" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (201):

```json
{
    "id": "ebb9453f-ccd3-429c-a7fd-c33e63f83b04",
    "name": "Setting A"
}
```
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


## api/kpi-activities/{kpi_activity}

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/api/kpi-activities/nisi" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"praesentium","score":"vero","pipelineId":"et"}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (201):

```json
{
    "id": "ebb9453f-ccd3-429c-a7fd-c33e63f83b04",
    "name": "Setting A"
}
```
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


## api/kpi-activities/{kpi_activity}

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/api/kpi-activities/repellat" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (201):

```json
true
```
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
</form>



