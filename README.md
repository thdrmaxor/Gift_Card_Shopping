# Gift_Card_Shopping

![title](https://user-images.githubusercontent.com/66298612/138408011-3541e93e-f80c-479f-a259-995a010d4f1d.JPG)

----

# 프로젝트 설명

>졸업작품으로 만들어본 쇼핑몰 사이트이며, 웹개발에 있어서 스킬을 키워나가기 위해 만들어 보았다.
>>주 언어는 html,css,php로 구현되어 있다.
>>DB관리는 sql로 구현하였다.

>회원가입을 통해 홈페이지의 주 기능을 사용할 수 있으며
>회원가입은 일반회원, 우수회원, 관리자로 나뉘며 사용가능한 역할 또한 다르다.
>>일반회원과 우수회원은 상품구매, 캐쉬충전, 문의글작성이 있으며 우수회원은 상품구매시 할인율이 추가 적용된다.
>>관리자는 회원등급변경, 회원정보조회가 있다.

----

## 파일 설명

- index.php에서 시작하여 메뉴를 고르면 메인메뉴로 넘어가고 menu를 select하면 그의 맞는 form에 맞게 function이 실행된다.

- 상위(menu, title, up_content)등이 구성되어있는 것이 header.php이다. 

- main.php는 main content과 form으로 구성되어 있고, form을 통해서 각 function이 연결되어 일을 수행한다.

- footer.php는 홈페이지의 이름, 정보 등으로 구성되어있고, main과 header파일이 바뀌어도 footer파일은 바뀌지않고 유지한다.

----

## DB 설명

- 홈페이지를 개발하기 위해서는 서버가 필요하다. 
-- DB와 홈페이지를 연동해야한다. 이를 위해서 apache를 설치해야한다. 
-- apache서버를 설치하기 위해서 XAMPP Control Panel을 설치하여 Apache와 Mysql을 실행시켜준다.
-- Apache 서버에는 MySQL이 내장되어있고, 상단의 PHPmyAdmin을 들어가서 SQL을 사용할 수 있다. 
-- root(관리자)계정으로 로그인한다.

----

## 초기 화면
![화면3](https://user-images.githubusercontent.com/66298612/153322544-fdad431b-2d0f-4919-8cb1-4f68abb8567e.png)

----

## 로그인 화면
![화면1](https://user-images.githubusercontent.com/66298612/153322556-ab37d8c5-414a-460a-b0dc-437463607ac2.png)

----

## 판매상품 화면
![화면2](https://user-images.githubusercontent.com/66298612/153322578-323819a8-8072-4675-8c6d-f75f8da9bb90.png)

----

## 자유게시판 화면
![화면4](https://user-images.githubusercontent.com/66298612/153322753-c79aaf2f-1026-4fbe-8583-b2f76a2d8d2d.png)

