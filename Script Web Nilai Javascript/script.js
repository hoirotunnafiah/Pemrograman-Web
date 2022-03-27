function test () {
  var val1=document.kirim.T1.value
  if(val1>=0&&48)
    document.kirim.T2.value="E"
  if(val1>=50&&59)
    document.kirim.T2.value="D"
  if(val1>=60&&69)
    document.kirim.T2.value="C"
  if(val1>=70&&79)
    document.kirim.T2.value="B"
  if(val1>=80&&100)
    document.kirim.T2.value="A"
  if(val1>100){
    alert('Mohon Masukkan Nilai Antara 1 sampai 100')
    document.kirim.T2.value=""
  }
  if(val1<0){
    alert('Mohon Masukkan Nilai Antara 1 sampai 100')
    document.kirim.T2.value=""
  }
}
