<div id="login_dialog" class="modal animated fade" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-light p-2">
                <h5 class="modal-title">@lang('login.SIGNIN')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times fa-xs"></i>
                </button>
            </div>
            <div class="modal-body">
                <div id="firebaseui-auth-container"></div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var firebaseConfig = {
        apiKey: "AIzaSyCsLUi82gxN97jSOR6eTDYRySBWGID6rzA",
        authDomain: "envienta-1537699258996.firebaseapp.com",
        databaseURL: "https://envienta-1537699258996.firebaseio.com",
        projectId: "envienta-1537699258996",
        storageBucket: "envienta-1537699258996.appspot.com",
        messagingSenderId: "146909556325",
        appId: "1:146909556325:web:94ae39f94cbf5443bb608c",
        measurementId: "G-RKWBH5LKF6"
    };

    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();

    firebase.auth().onAuthStateChanged(async function(user) {
        if (user) {
            var idToken = await firebase.auth().currentUser.getIdToken(true);
            console.log(idToken);
            $.get("{{ url('/auth/firebase_login') }}", {
                token: idToken
            }).done(function(data) {
                console.log(data);
@if(!Auth::check())
                if (data == 'success') {
                    location.reload();
                }
@endif
            });
        } else {
            console.log("No user is signed in.");
        }
    });


    var ui = new firebaseui.auth.AuthUI(firebase.auth());
    ui.start('#firebaseui-auth-container', {
        signInSuccessUrl: "{{ url('/') }}",
        signInOptions: [{
                provider: firebase.auth.GoogleAuthProvider.PROVIDER_ID
            }, {
                provider: firebase.auth.FacebookAuthProvider.PROVIDER_ID
            },
            {
                provider: firebase.auth.EmailAuthProvider.PROVIDER_ID,
                signInMethod: firebase.auth.EmailAuthProvider.EMAIL_LINK_SIGN_IN_METHOD
            }
        ]
    });
</script>
