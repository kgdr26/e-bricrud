<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login || e-BRIcrud</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/login/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v12/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v12/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/login/animate.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/login/hamburgers.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/login/select2.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/login/util.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/login/main.css')}}">
        <meta name="robots" content="noindex, follow">
        <script nonce="86080918-3eae-4950-af16-d51bfdcc4684">
            (function (w, d) {
                ! function (j, k, l, m) {
                    j[l] = j[l] || {};
                    j[l].executed = [];
                    j.zaraz = {
                        deferred: [],
                        listeners: []
                    };
                    j.zaraz.q = [];
                    j.zaraz._f = function (n) {
                        return async function () {
                            var o = Array.prototype.slice.call(arguments);
                            j.zaraz.q.push({
                                m: n,
                                a: o
                            })
                        }
                    };
                    for (const p of ["track", "set", "debug"]) j.zaraz[p] = j.zaraz._f(p);
                    j.zaraz.init = () => {
                        var q = k.getElementsByTagName(m)[0],
                            r = k.createElement(m),
                            s = k.getElementsByTagName("title")[0];
                        s && (j[l].t = k.getElementsByTagName("title")[0].text);
                        j[l].x = Math.random();
                        j[l].w = j.screen.width;
                        j[l].h = j.screen.height;
                        j[l].j = j.innerHeight;
                        j[l].e = j.innerWidth;
                        j[l].l = j.location.href;
                        j[l].r = k.referrer;
                        j[l].k = j.screen.colorDepth;
                        j[l].n = k.characterSet;
                        j[l].o = (new Date).getTimezoneOffset();
                        if (j.dataLayer)
                            for (const w of Object.entries(Object.entries(dataLayer).reduce(((x, y) => ({
                                    ...x[1],
                                    ...y[1]
                                })), {}))) zaraz.set(w[0], w[1], {
                                scope: "page"
                            });
                        j[l].q = [];
                        for (; j.zaraz.q.length;) {
                            const z = j.zaraz.q.shift();
                            j[l].q.push(z)
                        }
                        r.defer = !0;
                        for (const A of [localStorage, sessionStorage]) Object.keys(A || {}).filter((C => C
                            .startsWith("_zaraz_"))).forEach((B => {
                            try {
                                j[l]["z_" + B.slice(7)] = JSON.parse(A.getItem(B))
                            } catch {
                                j[l]["z_" + B.slice(7)] = A.getItem(B)
                            }
                        }));
                        r.referrerPolicy = "origin";
                        r.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(j[l])));
                        q.parentNode.insertBefore(r, q)
                    };
                    ["complete", "interactive"].includes(k.readyState) ? zaraz.init() : j.addEventListener(
                        "DOMContentLoaded", zaraz.init)
                }(w, d, "zarazData", "script");
            })(window, document);

        </script>
    </head>
    <body>
        <div class="limiter">
            <div class="container-login100" style="background-image: url({{asset('assets/img/bg-login.jpg')}});">
                <div class="wrap-login100 p-t-190 p-b-30">
                    <form class="login100-form validate-form" action="{{route('login_post')}}" method="POST">
                        @csrf
                        <div class="login100-form-avatar" style="border-radius: 0%;">
                            <img src="{{asset('assets/img/logo_bri_2.png')}}" alt="AVATAR">
                        </div>
                        <span class="login100-form-title p-t-20 p-b-45">
                            BANK BRI
                        </span>

                        @if(session('error'))
                            <div class="wrap-input100 m-b-10 alert alert-danger alert-dismissible fade show" role="alert">
                                {{ Session::get('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fa fa-x"></i></button>
                            </div>
                        @endif

                        <div class="wrap-input100 validate-input m-b-10" data-validate="Username is required">
                            <input class="input100" type="text" name="username" placeholder="Username">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user"></i>
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input m-b-10" data-validate="Password is required">
                            <input class="input100" type="password" name="password" placeholder="Password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock"></i>
                            </span>
                        </div>
                        <div class="container-login100-form-btn p-t-10">
                            <button class="login100-form-btn" type="submit">
                                Login
                            </button>
                        </div>
                        <div class="text-center w-full p-t-25 p-b-230">
                            {{-- <a href="#" class="txt1">
                                Forgot Username / Password?
                            </a> --}}
                        </div>
                        <div class="text-center w-full">
                            {{-- <a class="txt1" href="#">
                                Create new account
                                <i class="fa fa-long-arrow-right"></i>
                            </a> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="{{asset('assets/login/jquery-3.2.1.min.js')}}"></script>

        <script src="{{asset('assets/login/popper.js')}}"></script>
        <script src="{{asset('assets/login/bootstrap.min.js')}}"></script>

        <script src="{{asset('assets/login/select2.min.js')}}"></script>

        <script src="{{asset('assets/login/main.js')}}"></script>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-23581568-13');

        </script>
        <script defer
            src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854"
            integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg=="
            data-cf-beacon='{"rayId":"7f41b68d5eb34abf","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.8.0","si":100}'
            crossorigin="anonymous"></script>
    </body>
</html>
