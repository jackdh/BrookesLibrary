<?php require_once 'config.php'?>
{{#book}}
<div class="row">
    <figure class="col-xs-3">
        <img src="{{coverSrc}}" class="img-responsive img-thumbnail" alt="{{coverAlt}}">
    </figure>
    <div class="col-xs-9 info">
        <h2>{{title}}</h2>
        <p><a href="#" rel="author">{{author}}</a></p>
        <p>Published: {{publicationDate}}</p>
        <p>ISBN: <span class="isbn">{{ISBN}}</span></p>

        {{#dueback}}
        <p class="outOfStock">Due back: {{dueback}}</p>
        {{/dueback}}
        {{^dueback}}
        <p>Copies available: {{copiesAvailable}}</p>
        {{/dueback}}

        <p>Location: Wheatly</p>
        <div class="rating-wrapper">
            <p>Rating: </p>
            <div id="star-rating">
                <input type="radio" name="example" class="rating" value="1"/>
                <input type="radio" name="example" class="rating" value="2"/>
                <input type="radio" name="example" class="rating" value="3"/>
                <input type="radio" name="example" class="rating" value="4"/>
                <input type="radio" name="example" class="rating" value="5"/>
            </div>

        </div>

    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h3>Description</h3>
        <p>{{description}}</p></div>

</div>
<div class="row action-buttons">

    <div class="col-md-6">
        <?php if (hasPermission("admin")) { ?>
            <button onclick="deleteBook()" type="button" class="delete-book btn btn-danger">Delete</button>
        <?php } ?>
    </div>
    <div class="col-md-6 ">
        <div class="pull-right">
            <?php if (hasPermission("postgrad")) { ?>
            <a target="_blank" href="/images/placeholder.pdf" type="button" class="download-book btn btn-primary">Download</a>
            <?php } ?>
            <?php if (loggedin()) { ?>
            <button onclick="reserveBook()" type="button" class="reserve-book btn btn-primary">Reserve</button>
            <?php } ?>
        </div>
    </div>
</div>
{{/book}}