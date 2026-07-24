# MovieLog

## 소개

영화 리뷰를 작성하고 관리하는 PHP 기반 CRUD 웹앱입니다. 로그인/회원가입, DB 연동, 폼 처리 등 웹 백엔드 기초를 연습하기 위한 초기 프로젝트입니다.

## 🛠 기술 스택

- **언어**: PHP (세션 기반 로그인)
- **DB**: MySQL

## ✨ 주요 기능

- **회원가입 / 로그인 / 로그아웃** (`signup.php`, `login.php`, `logout.php`, `request_signup.php`, `request_login.php`)
- **메인 페이지**: 로그인 상태에 따라 상단 바 UI 분기 (`main.php`)
- **프로필 조회 및 수정** (`mypage.php`, `edit_profile.php`, `request_edit_profile.php`)
- **영화 리뷰 작성 및 상세 조회** (`movie_write.php`, `request_movie_write.php`, `request_movie.php`, `request_movie_detail.php`)

## 📁 구조

```
movieLog/
├── login.php / signup.php / logout.php          # 인증
├── request_login.php / request_signup.php        # 인증 처리
├── main.php                                       # 메인 페이지
├── mypage.php / edit_profile.php                  # 마이페이지
├── request_edit_profile.php
├── movie_write.php / request_movie_write.php      # 리뷰 작성
└── request_movie.php / request_movie_detail.php   # 리뷰 조회
```

## ▶️ 실행 방법

```bash
# PHP 내장 서버로 실행
php -S localhost:8000
```

MySQL에 필요한 테이블(사용자, 영화, 리뷰)을 미리 생성하고, 각 PHP 파일의 DB 접속 정보를 로컬 환경에 맞게 설정해야 합니다.

## 📸 결과

회원가입 → 로그인 → 리뷰 작성 → 마이페이지 확인까지 이어지는 기본적인 세션 기반 CRUD 플로우가 동작합니다.

> 웹 백엔드 기초를 다지기 위한 연습 프로젝트로, 스타일링·유효성 검사 등은 포함되어 있지 않습니다.
