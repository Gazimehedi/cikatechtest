<footer>
    <div class="container py-3">
        <div class="copyright">
            © <span id="yearCopy">2022</span>  Copyright <strong><span>Cikatech</span></strong>. All Rights Reserved
        </div>
    </div>
</footer>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="fas fa-arrow-up"></i>
</a>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@livewireScripts
<script type="module">
    import hotwiredTurbo from 'https://cdn.skypack.dev/@hotwired/turbo';
</script>

<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
<script>
    document.addEventListener("scroll", function(){
        let backtotop = document.querySelector('.back-to-top');
        if(window.scrollY > 50){
            backtotop.classList.add('active');
        }else{
            backtotop.classList.remove('active');
        }
    });
</script>

