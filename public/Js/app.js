
import 'vendor/jquery/jquery.min.js'
import 'vendor/bootstrap/js/bootstrap.bundle.min.js'

import 'assets/js/custom.js'
import 'assets/js/owl.js'
import 'assets/js/accordions.js'


    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t){                   //declaring the array outside of the
    if(! cleared[t.id]){                      // function makes it static and global
    cleared[t.id] = 1;  // you could use true and false, but that's more typing
    t.value='';         // with more chance of typos
    t.style.color='#fff';
}
}
