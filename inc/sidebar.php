<div id="search-container" class="border">
    <form action="/search" method="get">
        <label for="search">Search</label>
        <input name="query" type="search" class="form-control" id="search" placeholder="Enter text here">
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>
<?php
    if (hasPermission("admin")) {
        ?><a href="/add-book/" class="add-book btn btn-primary btn-lg btn-block">Add Book</a><?php
    }
if (hasPermission("lecturer")) {
        ?> <a href="/request-book/" class="request-book btn btn-primary btn-lg btn-block">Request Book</a><?php
    }

?>




