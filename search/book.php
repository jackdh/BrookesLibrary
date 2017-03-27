<?php function getBook($instock) {?>
<section class="row book">
    <figure class="col-xs-3">
        <a href="/book"><img src="../images/harry-potter-and-the-philosopherss-stone.jpg" class="img-responsive img-thumbnail" alt="Book cover of: Harry Potter and the philosopher's stone"></a>
    </figure>
    <div class="col-xs-9 info">
        <h2><a href="/book">Harry Potter and the philosophers's stone</a></h2>
        <p><a href="#" rel="author">JK Rowling</a></p>
        <p>Published: 26/06/1997</p>
        <?php if ($instock) {?>
        <p>Copies available: 4</p>
        <?php } else { ?>
            <p class="outOfStock">Next back: 25/04/2017</p>
        <?php }?>
        <p>The most evil and powerful dark wizard in history, Lord Voldemort, murdered married couple James and Lily Potter but mysteriously disappeared after failing to kill their infant son, Harry. While the wizarding world celebrates Voldemort's apparent downfall, Professor Dumbledore, Professor McGonagall and half-giant Rubeus Hagrid place the one-year-old orphan in the care of his surly and cold Muggle uncle and aunt, Vernon and Petunia Dursley and their spoilt and bullying son, Dudley.</p>
    </div>


</section>

<?php }?>