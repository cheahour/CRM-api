# Sale management


## api/sales

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/sales" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"error","email":"quae","password":"corrupti","roleId":"voluptatem"}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


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


## api/dsms

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/dsms" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"offset":"esse","limit":"eligendi"}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
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


## api/sale-executives

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/sale-executives" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"dsmId":"vitae"}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
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

</form>



