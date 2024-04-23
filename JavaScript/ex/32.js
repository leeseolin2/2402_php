// string 객체

let str = '문자열이지롱';
let str2 = new String('이렇게 만들어야해');

// length : 문자열의 길이를 반환
console.log(str.length);

// charAt() : 특정 인덱스의 문자를 반환
str.charAt(3);

// indexOf() : 문자열에서 특정 문자열을 찾아 최초의 인덱스를 반환
// 찾지못하면 -1 반환
str = '안녕하세요. 안녕하세요.';
str.indexOf('녕');
if(str.indexOf('안녕') < 0) {
    console.log('해당문자열없음')
}
// 검색을 시작할 인덱스 위치 지정 하는 방법
str.indexOf('녕', 5);

// includes() : 문자열에서 특정 문자열을 찾아 true/false 반환
if(str.includes('하세요')){
    console.log('검색 문자열 존재')
}

// replace() : 특정 문자열을 찾아서 지정한 문자열로 치환한 문자열을 반환
str = 'abcdefg dede';
str.replace('de','안녕');

// replaceAll() : 모든 특정 문자열을 찾아서 지정한 문자열로 치환한 문자열을 반환
str.replaceAll('de', '안녕');

// substring() : 시작 인덱스부터 종료 인덱스까지 자른 문자열을 반환
str = '안녕하세요. Javascript입니다.';
str.substring(0, 3);

let pattern = 'JavaScript';
let patternIndex = str.indexOf(pattern);
str.substring(patternIndex, patternIndex + pattern.length);

// split() : separator를 기준으로 문자열을 잘라서 배열 요소로 담은 배열을 반환
str = '빵, 돼지숯불, 제육, 돈까스';
str.split(', ');
str.split(',' ,2); // 배열길이를 2로 제한

// trim() : 좌우의 공백을 제거해서 문자열 반환
str = '     sadasda    '
str.trim();

// toUpperCase(), toLowerCase() : 알파뱃을 대/소문자로 변환해서 반환
str = 'aBcD';
str.toUpperCase();
str.toLowerCase();