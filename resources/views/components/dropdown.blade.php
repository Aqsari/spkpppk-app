<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
        <li><a href="#">10</a></li>
        <li><a href="#">20</a></li>
        <li><a href="#">30</a></li>
    </ul>
</div>

 <input type='hidden' id='vote' value='' />

<script>
document.querySelectorAll('li').forEach( function(el) {
            
    el.addEventListener('click', function() {
        document.querySelector('.dropdown-toggle').innerText = el.textContent;
        document.querySelector('#vote').value = el.textContent;
    });
});
</script>