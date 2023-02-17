<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.16.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.16.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GET-">
                                <a href="#endpoints-GET-">API Details</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-products" class="tocify-header">
                <li class="tocify-item level-1" data-unique="products">
                    <a href="#products">Products</a>
                </li>
                                    <ul id="tocify-subheader-products" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="products-GETproducts">
                                <a href="#products-GETproducts">Products' list</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="products-GETproducts--code-">
                                <a href="#products-GETproducts--code-">Product details</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="products-PUTproducts--code-">
                                <a href="#products-PUTproducts--code-">Product update</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="products-DELETEproducts--code-">
                                <a href="#products-DELETEproducts--code-">Trash product</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: February 17, 2023</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GET-">API Details</h2>

<p>
</p>

<p>Returns details about the current state of the API</p>

<span id="example-requests-GET-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GET-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;db_connection&quot;: &quot;OK&quot;,
    &quot;last_data_import&quot;: &quot;unperformed&quot;,
    &quot;db_uptime&quot;: &quot;2 hours, 17 minutes&quot;,
    &quot;server_uptime&quot;: &quot;2 hours, 19 minutes&quot;,
    &quot;server_memory_usage&quot;: &quot;2.8GB&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GET-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GET-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GET-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GET-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET-"></code></pre>
</span>
<form id="form-GET-" data-method="GET"
      data-path="/"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GET-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GET-"
                    onclick="tryItOut('GET-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GET-"
                    onclick="cancelTryOut('GET-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GET-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>/</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GET-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GET-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="products">Products</h1>

    

                                <h2 id="products-GETproducts">Products&#039; list</h2>

<p>
</p>

<p>Returns a paginated list of products and their info available in the database</p>

<span id="example-requests-GETproducts">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/products?page=20" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/products"
);

const params = {
    "page": "20",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETproducts">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;code&quot;: &quot;0000000000017&quot;,
            &quot;status&quot;: &quot;published&quot;,
            &quot;imported_t&quot;: &quot;2023-01-28T01:08:37Z&quot;,
            &quot;url&quot;: &quot;http://world-en.openfoodfacts.org/product/0000000000017/vitoria-crackers&quot;,
            &quot;creator&quot;: &quot;kiliweb&quot;,
            &quot;created_t&quot;: 1529059080,
            &quot;last_modified_t&quot;: 1561463718,
            &quot;product_name&quot;: &quot;Vit&oacute;ria crackers&quot;,
            &quot;quantity&quot;: &quot;&quot;,
            &quot;brands&quot;: &quot;&quot;,
            &quot;categories&quot;: &quot;&quot;,
            &quot;labels&quot;: &quot;&quot;,
            &quot;cities&quot;: &quot;&quot;,
            &quot;purchase_places&quot;: &quot;&quot;,
            &quot;stores&quot;: &quot;&quot;,
            &quot;ingredients_text&quot;: &quot;&quot;,
            &quot;traces&quot;: &quot;&quot;,
            &quot;serving_size&quot;: &quot;&quot;,
            &quot;serving_quantity&quot;: 0,
            &quot;nutriscore_score&quot;: 0,
            &quot;nutriscore_grade&quot;: &quot;&quot;,
            &quot;main_category&quot;: &quot;&quot;,
            &quot;image_url&quot;: &quot;https://static.openfoodfacts.org/images/products/000/000/000/0017/front_fr.4.400.jpg&quot;
        },
        {
            &quot;code&quot;: &quot;0000000000031&quot;,
            &quot;status&quot;: &quot;published&quot;,
            &quot;imported_t&quot;: &quot;2023-01-28T01:08:37Z&quot;,
            &quot;url&quot;: &quot;http://world-en.openfoodfacts.org/product/0000000000031/cacao&quot;,
            &quot;creator&quot;: &quot;isagoofy&quot;,
            &quot;created_t&quot;: 1539464774,
            &quot;last_modified_t&quot;: 1539464817,
            &quot;product_name&quot;: &quot;Cacao&quot;,
            &quot;quantity&quot;: &quot;130 g&quot;,
            &quot;brands&quot;: &quot;&quot;,
            &quot;categories&quot;: &quot;&quot;,
            &quot;labels&quot;: &quot;&quot;,
            &quot;cities&quot;: &quot;&quot;,
            &quot;purchase_places&quot;: &quot;&quot;,
            &quot;stores&quot;: &quot;&quot;,
            &quot;ingredients_text&quot;: &quot;&quot;,
            &quot;traces&quot;: &quot;&quot;,
            &quot;serving_size&quot;: &quot;&quot;,
            &quot;serving_quantity&quot;: 0,
            &quot;nutriscore_score&quot;: 0,
            &quot;nutriscore_grade&quot;: &quot;&quot;,
            &quot;main_category&quot;: &quot;&quot;,
            &quot;image_url&quot;: &quot;https://static.openfoodfacts.org/images/products/000/000/000/0031/front_fr.3.400.jpg&quot;
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://localhost/products?page=1&quot;,
        &quot;last&quot;: &quot;http://localhost/products?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/products?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://localhost/products&quot;,
        &quot;per_page&quot;: 10,
        &quot;to&quot;: 2,
        &quot;total&quot;: 2
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETproducts" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETproducts"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETproducts" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETproducts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETproducts"></code></pre>
</span>
<form id="form-GETproducts" data-method="GET"
      data-path="products"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETproducts', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETproducts"
                    onclick="tryItOut('GETproducts');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETproducts"
                    onclick="cancelTryOut('GETproducts');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETproducts" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>products</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETproducts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETproducts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>page</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="page"                data-endpoint="GETproducts"
               value="20"
               data-component="query">
    <br>
<p>Page number Example: <code>20</code></p>
            </div>
                </form>

                    <h2 id="products-GETproducts--code-">Product details</h2>

<p>
</p>

<p>Returns the information of a specific product by code number</p>

<span id="example-requests-GETproducts--code-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/products/232620529" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/products/232620529"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETproducts--code-">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No query results for model [App\\Models\\Product] 0000000000017&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;code&quot;: &quot;0000000000017&quot;,
    &quot;status&quot;: &quot;published&quot;,
    &quot;imported_t&quot;: &quot;2023-01-28T01:08:37Z&quot;,
    &quot;url&quot;: &quot;http://world-en.openfoodfacts.org/product/0000000000017/vitoria-crackers&quot;,
    &quot;creator&quot;: &quot;kiliweb&quot;,
    &quot;created_t&quot;: 1529059080,
    &quot;last_modified_t&quot;: 1561463718,
    &quot;product_name&quot;: &quot;Vit&oacute;ria crackers&quot;,
    &quot;quantity&quot;: &quot;&quot;,
    &quot;brands&quot;: &quot;&quot;,
    &quot;categories&quot;: &quot;&quot;,
    &quot;labels&quot;: &quot;&quot;,
    &quot;cities&quot;: &quot;&quot;,
    &quot;purchase_places&quot;: &quot;&quot;,
    &quot;stores&quot;: &quot;&quot;,
    &quot;ingredients_text&quot;: &quot;&quot;,
    &quot;traces&quot;: &quot;&quot;,
    &quot;serving_size&quot;: &quot;&quot;,
    &quot;serving_quantity&quot;: 0,
    &quot;nutriscore_score&quot;: 0,
    &quot;nutriscore_grade&quot;: &quot;&quot;,
    &quot;main_category&quot;: &quot;&quot;,
    &quot;image_url&quot;: &quot;https://static.openfoodfacts.org/images/products/000/000/000/0017/front_fr.4.400.jpg&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETproducts--code-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETproducts--code-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETproducts--code-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETproducts--code-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETproducts--code-"></code></pre>
</span>
<form id="form-GETproducts--code-" data-method="GET"
      data-path="products/{code}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETproducts--code-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETproducts--code-"
                    onclick="tryItOut('GETproducts--code-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETproducts--code-"
                    onclick="cancelTryOut('GETproducts--code-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETproducts--code-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>products/{code}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETproducts--code-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETproducts--code-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>code</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="code"                data-endpoint="GETproducts--code-"
               value="232620529"
               data-component="url">
    <br>
<p>Example: <code>232620529</code></p>
            </div>
                    </form>

                    <h2 id="products-PUTproducts--code-">Product update</h2>

<p>
</p>

<p>Update information of product specified by code number</p>

<span id="example-requests-PUTproducts--code-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/products/232620529" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"image_url\": \"https:\\/\\/static.openfoodfacts.org\\/images\\/products\\/000\\/000\\/000\\/0017\\/front_fr.4.400.jpg\",
    \"url\": \"http:\\/\\/world-en.openfoodfacts.org\\/product\\/0000000000017\\/vitoria-crackers\",
    \"status\": \"draft\",
    \"product_name\": \"Vitória crackers\",
    \"quantity\": \"114 g (3 x 2 u.)\",
    \"brands\": \"sed\",
    \"categories\": \"molestias\",
    \"labels\": \"est\",
    \"cities\": \"natus\",
    \"purchase_places\": \"veniam\",
    \"stores\": \"quam\",
    \"ingredients_text\": \"occaecati\",
    \"traces\": \"culpa\",
    \"serving_size\": \"voluptatum\",
    \"serving_quantity\": 1168,
    \"nutriscore_score\": 16,
    \"nutriscore_grade\": \"t\",
    \"main_category\": \"nihil\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/products/232620529"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "image_url": "https:\/\/static.openfoodfacts.org\/images\/products\/000\/000\/000\/0017\/front_fr.4.400.jpg",
    "url": "http:\/\/world-en.openfoodfacts.org\/product\/0000000000017\/vitoria-crackers",
    "status": "draft",
    "product_name": "Vitória crackers",
    "quantity": "114 g (3 x 2 u.)",
    "brands": "sed",
    "categories": "molestias",
    "labels": "est",
    "cities": "natus",
    "purchase_places": "veniam",
    "stores": "quam",
    "ingredients_text": "occaecati",
    "traces": "culpa",
    "serving_size": "voluptatum",
    "serving_quantity": 1168,
    "nutriscore_score": 16,
    "nutriscore_grade": "t",
    "main_category": "nihil"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTproducts--code-">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No query results for model [App\\Models\\Product] 0000000000017&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;code&quot;: &quot;0000000000017&quot;,
    &quot;status&quot;: &quot;published&quot;,
    &quot;imported_t&quot;: &quot;2023-01-28T01:08:37Z&quot;,
    &quot;url&quot;: &quot;http://world-en.openfoodfacts.org/product/0000000000017/vitoria-crackers&quot;,
    &quot;creator&quot;: &quot;kiliweb&quot;,
    &quot;created_t&quot;: 1529059080,
    &quot;last_modified_t&quot;: 1561463718,
    &quot;product_name&quot;: &quot;Vit&oacute;ria crackers&quot;,
    &quot;quantity&quot;: &quot;&quot;,
    &quot;brands&quot;: &quot;&quot;,
    &quot;categories&quot;: &quot;&quot;,
    &quot;labels&quot;: &quot;&quot;,
    &quot;cities&quot;: &quot;&quot;,
    &quot;purchase_places&quot;: &quot;&quot;,
    &quot;stores&quot;: &quot;&quot;,
    &quot;ingredients_text&quot;: &quot;&quot;,
    &quot;traces&quot;: &quot;&quot;,
    &quot;serving_size&quot;: &quot;&quot;,
    &quot;serving_quantity&quot;: 0,
    &quot;nutriscore_score&quot;: 0,
    &quot;nutriscore_grade&quot;: &quot;&quot;,
    &quot;main_category&quot;: &quot;&quot;,
    &quot;image_url&quot;: &quot;https://static.openfoodfacts.org/images/products/000/000/000/0017/front_fr.4.400.jpg&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTproducts--code-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTproducts--code-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTproducts--code-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTproducts--code-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTproducts--code-"></code></pre>
</span>
<form id="form-PUTproducts--code-" data-method="PUT"
      data-path="products/{code}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTproducts--code-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTproducts--code-"
                    onclick="tryItOut('PUTproducts--code-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTproducts--code-"
                    onclick="cancelTryOut('PUTproducts--code-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTproducts--code-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>products/{code}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>products/{code}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="PUTproducts--code-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="PUTproducts--code-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>code</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="code"                data-endpoint="PUTproducts--code-"
               value="232620529"
               data-component="url">
    <br>
<p>Example: <code>232620529</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>image_url</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="image_url"                data-endpoint="PUTproducts--code-"
               value="https://static.openfoodfacts.org/images/products/000/000/000/0017/front_fr.4.400.jpg"
               data-component="body">
    <br>
<p>Image url of the product on Open Food Facts. Must be a valid URL. Example: <code>https://static.openfoodfacts.org/images/products/000/000/000/0017/front_fr.4.400.jpg</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>url</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="url"                data-endpoint="PUTproducts--code-"
               value="http://world-en.openfoodfacts.org/product/0000000000017/vitoria-crackers"
               data-component="body">
    <br>
<p>Url of the product page on Open Food Facts. Must be a valid URL. Example: <code>http://world-en.openfoodfacts.org/product/0000000000017/vitoria-crackers</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="status"                data-endpoint="PUTproducts--code-"
               value="draft"
               data-component="body">
    <br>
<p>Status of the product. Must be one of <code>draft</code> or <code>published</code>. Example: <code>draft</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>product_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="product_name"                data-endpoint="PUTproducts--code-"
               value="Vitória crackers"
               data-component="body">
    <br>
<p>Name of the product. Example: <code>Vitória crackers</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>quantity</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="quantity"                data-endpoint="PUTproducts--code-"
               value="114 g (3 x 2 u.)"
               data-component="body">
    <br>
<p>Quantity and unit. Example: <code>114 g (3 x 2 u.)</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>brands</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="brands"                data-endpoint="PUTproducts--code-"
               value="sed"
               data-component="body">
    <br>
<p>Example: <code>sed</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>categories</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="categories"                data-endpoint="PUTproducts--code-"
               value="molestias"
               data-component="body">
    <br>
<p>Example: <code>molestias</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>labels</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="labels"                data-endpoint="PUTproducts--code-"
               value="est"
               data-component="body">
    <br>
<p>Example: <code>est</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>cities</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="cities"                data-endpoint="PUTproducts--code-"
               value="natus"
               data-component="body">
    <br>
<p>Example: <code>natus</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>purchase_places</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="purchase_places"                data-endpoint="PUTproducts--code-"
               value="veniam"
               data-component="body">
    <br>
<p>Example: <code>veniam</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>stores</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="stores"                data-endpoint="PUTproducts--code-"
               value="quam"
               data-component="body">
    <br>
<p>Example: <code>quam</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ingredients_text</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="ingredients_text"                data-endpoint="PUTproducts--code-"
               value="occaecati"
               data-component="body">
    <br>
<p>Example: <code>occaecati</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>traces</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="traces"                data-endpoint="PUTproducts--code-"
               value="culpa"
               data-component="body">
    <br>
<p>Example: <code>culpa</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>serving_size</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="serving_size"                data-endpoint="PUTproducts--code-"
               value="voluptatum"
               data-component="body">
    <br>
<p>Example: <code>voluptatum</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>serving_quantity</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               name="serving_quantity"                data-endpoint="PUTproducts--code-"
               value="1168"
               data-component="body">
    <br>
<p>Example: <code>1168</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nutriscore_score</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               name="nutriscore_score"                data-endpoint="PUTproducts--code-"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nutriscore_grade</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="nutriscore_grade"                data-endpoint="PUTproducts--code-"
               value="t"
               data-component="body">
    <br>
<p>Must contain only letters. Must be one of <code>a</code>, <code>b</code>, <code>c</code>, <code>d</code>, or <code>e</code> Must be 1 character. Example: <code>t</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>main_category</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="main_category"                data-endpoint="PUTproducts--code-"
               value="nihil"
               data-component="body">
    <br>
<p>Example: <code>nihil</code></p>
        </div>
        </form>

                    <h2 id="products-DELETEproducts--code-">Trash product</h2>

<p>
</p>

<p>Trashes product specified by code number</p>

<span id="example-requests-DELETEproducts--code-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/products/232620529" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/products/232620529"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEproducts--code-">
            <blockquote>
            <p>Example response (204):</p>
        </blockquote>
                <pre>
<code>[Empty response]</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No query results for model [App\\Models\\Product] 0000000000017&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEproducts--code-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEproducts--code-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEproducts--code-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEproducts--code-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEproducts--code-"></code></pre>
</span>
<form id="form-DELETEproducts--code-" data-method="DELETE"
      data-path="products/{code}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEproducts--code-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEproducts--code-"
                    onclick="tryItOut('DELETEproducts--code-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEproducts--code-"
                    onclick="cancelTryOut('DELETEproducts--code-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEproducts--code-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>products/{code}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="DELETEproducts--code-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="DELETEproducts--code-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>code</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="code"                data-endpoint="DELETEproducts--code-"
               value="232620529"
               data-component="url">
    <br>
<p>Example: <code>232620529</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
