<!-- resources/views/components/footer.blade.php -->
<footer class="bg-light text-center text-lg-start py-4">
    <div class="container">
        <div class="row">
            <!-- Colonna Dati dell'Azienda -->
            <div class="col-md-4 mb-4 mb-md-0">
                <img src="/images/logo.png" alt="Logo" class="img-fluid mb-3" style="max-width: 200px;">
                <ul class="list-unstyled">
                    <li>Partita IVA: 02 693800696</li>
                    <li>Stefano Ferrara</li>
                    <li class="social"><i class=" bi bi-geo-alt-fill"></i> <a href="https://maps.app.goo.gl/aw7AiRGQLbg147tE9" class="text-decoration-none">Via G. Castiglione, 7, 66034 Lanciano</a></li>
                </ul>
            </div>
            <!-- Colonna Pagine Social e Orari -->
            <div class="col-md-4 mb-4 mb-md-0">
                <h5 class="text-uppercase">Seguici</h5>
                <ul class="list-unstyled social">
                    <li><a href="tel:+393446475023" class="text-decoration-none social"><i class="bi bi-telephone-fill"></i> 3446475023</a></li>
                    <li><a href="https://www.facebook.com/share/14gNMR3HpQ/?mibextid=wwXIfr" class="text-decoration-none social"><i class="bi bi-facebook"></i> Facebook</a></li>
                    <li><a href="https://www.instagram.com/armonia_lanciano?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="text-decoration-none"><i class="bi bi-instagram"> Instagram</i></a></li>
                    <li><a href="" class="text-decoration-none"><i class="bi bi-whatsapp"></i> Whatsapp</a></li>
                    <li><a href="mailto:armonialanciano@gmail.com" class="text-decoration-none"><i class="bi bi-envelope-at"></i> armonialanciano@gmail.com</a></li>

                </ul>
                <h5 class="text-uppercase mt-3"><i class="bi bi-clock"> Lun-Ven: 8:00 - 20:00</i></h5>
                <h5 class="text-uppercase mt-3"><i class="bi bi-clock"> Sab: 8:00 - 13:00</i></h5>
                
            </div>
            <!-- Colonna Chi Siamo e Homepage -->
            <div class="col-md-4 mb-4 mb-md-0">
                <h5 class="text-uppercase">Informazioni</h5>
                <ul class="list-unstyled social">
                    <li><a href="{{route('chisiamo')}}" class="text-decoration-none">Chi Siamo</a></li>
                    <li><a href="{{route('article.index')}}" class="text-decoration-none">Articoli</a></li>
                    <li><a href="{{route('terms')}}" class="text-decoration-none">Termini e Condizioni</a></li>
                    <li><a href="https://www.iubenda.com/privacy-policy/31397459/cookie-policy" class="iubenda-white iubenda-noiframe iubenda-embed iubenda-noiframe " title="Cookie Policy ">Cookie Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script></li>
                    <li><a href="https://www.iubenda.com/privacy-policy/31397459" class="iubenda-white iubenda-noiframe iubenda-embed iubenda-noiframe " title="Privacy Policy ">Privacy Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script></li>
                    
                </ul>
            </div>
        </div>
    </div>
</footer>
