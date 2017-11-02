<html>
<script>
function StringCount() {
    var a = "kakak kakak ku adalah seorang pegawai" ;
array = a.split(" ");

array.sort();

var current = null;
var cnt = 0;
for (var i = 0; i < array.length; i++) {
    if (array[i] != current) {
        if (cnt > 0) {
            document.write(current + ' comes --> ' + cnt + ' times<br>');
        }
        current = array[i];
        cnt = 1;
    } else {
        cnt++;
    }
}
if (cnt > 0) {
    document.write(current + ' comes --> ' + cnt + ' times');
}
}
StringCount();
</script>
</html>