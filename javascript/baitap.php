<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Demo PHP Basic</title>
  </head>
  <body>
    1. Bai 1:
    public function sum(a, b) {
       return (a === b) ? a*6 : a+b;
    }
    2. Bai 2:
    public function sub(a) {
      return (a>19) ? (a-19)*3 : 19-a;
    }
    3. Bai 3
    public function masked(n) {
      arr = [];
      for(let i = 0; i < 10; i++) {
         let m = n; m.replace('*',i); m = +m;
          if (m%3 === 0) {
            arr.push(m)
         }
       }
      return arr;
     }
    4. Bai 4
    public function masked(n) {
      arr = [];
      for(let i = 0; i < 10; i++) {
        let m = n; m.replace('*',i); m = +m;
        if( m%6 === 0) {
           arr.push(m)
         }
        }
        return arr;
      }
  </body>
</html>
