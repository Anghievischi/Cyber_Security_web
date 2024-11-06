<div class="manager_cookies">
    <div class="__icon open_managerCookies"><img src="{{ asset('images/icons/icon_managerCookies.png') }}"
            alt="Gerenciador de Cookies">
    </div>

    <div class="__content">
        <button class="close_cookies">X</button>
        <span>Nosso site utiliza cookies para melhorar sua navegação, acesse nossa <a href="{{ route('politica') }}"
                style="color:#333;">política de privacidade</a> para saber
            mais.</span>

        <div class="buttons">
            <a class="--option">opções</a>
            <a class="--ok">aceito</a>
        </div>
    </div><!-- __content -->
    <div class="__options">
        <button class="close_cookies">X</button>
        <h2>Gerenciar Cookies:</h2>
        <div class="__item">
            <h3>Necessários</h3>
            <p>Esses cookies permitem funcionalidades essenciais, tais como segurança e suas permissões.</p>
            <div class="check">
                <h4>API LGPD</h4>
                <label class="switch">
                    <input type="checkbox" name="api_lgpd" class="checkbox-switch" checked disabled="disabled">
                    <span class="roundSwitch round"></span>
                </label>
            </div><!-- check -->
        </div><!-- __item -->
        <div class="__item">
            <h3>Estatísticos</h3>
            <p>Esses cookies nos ajudam a entender como os visitantes interagem com nosso site.</p>
            <div class="check">
                <h4>GOOGLE ANALYTICS</h4>
                <label class="switch">
                    <input type="checkbox" name="google_analytics" id="google_analytics" class="checkbox-switch"
                        checked>
                    <span class="roundSwitch round"></span>
                </label>
            </div>
        </div><!-- __item -->
        <div class="buttons">
            <a class="--save">SALVAR</a>
        </div>
    </div><!-- __options -->
</div><!-- manager_cookies -->

@push('script')
    <script>
        /* MANAGER OF COOKIES */
        const input_cookies = document.getElementById("google_analytics");

        if (!document.cookie.includes('api_lgpd=Y')) {
            $('.manager_cookies .__content').addClass('--active');
        }

        /* $('#cookies_ok').click(() => {
            document.cookie = "api_lgpd = Y; 20";
            document.cookie = "analytics = Y; 10";
            $('#accept_cookies').css("display", "none")
        }) */

        /* OPEN MANAGER OF COOKIES */
        $('.open_managerCookies').click(() => {
            if (document.cookie.includes('analytics=N')) {
                input_cookies.checked = false;
            }
            $('.manager_cookies .__content').toggleClass('--active');
        })

        /* CLOSE MANAGER OF COOKIES */
        $('.close_cookies').click(() => {
            $('.manager_cookies .__content').removeClass('--active');
            $('.manager_cookies .__options').removeClass('--active');
        })

        function checkAnalytics() {
            if (input_cookies.checked) {
                const expirationDate = new Date();
                expirationDate.setDate(expirationDate.getDate() + 30);
                document.cookie = `analytics=Y; expires=${expirationDate.toUTCString()}`;
                return;
            }
            document.cookie = "analytics = N";
        }

        /* ACCEPT COOKIES */
        $('.manager_cookies .__content .buttons a.--ok').click(function() {
            checkAnalytics();

            const expirationDate = new Date();
            expirationDate.setDate(expirationDate.getDate() + 30);
            document.cookie = `api_lgpd=Y; expires=${expirationDate.toUTCString()}`;
            $('.manager_cookies .__content').removeClass('--active');
        })

        /* OPEN OPIONS OF COOKIES */
        $('.manager_cookies .__content a.--option').click(function() {
            $('.manager_cookies .__content').removeClass('--active');
            $('.manager_cookies .__options').addClass('--active');
        })

        /* ACCEPT COOKIES CUSTOM */
        $('.manager_cookies .__options a.--save').click(function() {
            checkAnalytics();
            const expirationDate = new Date();
            expirationDate.setDate(expirationDate.getDate() + 30);
            document.cookie = `api_lgpd=Y; expires=${expirationDate.toUTCString()}`;
            $('.manager_cookies .__options').removeClass('--active');
        })
    </script>
@endpush
