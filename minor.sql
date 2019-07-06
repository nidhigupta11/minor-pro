--
-- File generated with SQLiteStudio v3.2.1 on Sat Jul 6 18:58:08 2019
--
-- Text encoding used: System
--
PRAGMA foreign_keys = off;
BEGIN TRANSACTION;

-- Table: minor
CREATE TABLE minor (
    fname       CHAR,
    lname       CHAR,
    email       CHAR,
    password    CHAR,
    gender      CHAR,
    [User text] CHAR,
    result      CHAR
);

INSERT INTO minor (
                      fname,
                      lname,
                      email,
                      password,
                      gender,
                      [User text],
                      result
                  )
                  VALUES (
                      'kritika',
                      'shetty',
                      'kriti.ka@gmail.com',
                      '*****',
                      'F',
                      'I am very happy today.',
                      NULL
                  );

INSERT INTO minor (
                      fname,
                      lname,
                      email,
                      password,
                      gender,
                      [User text],
                      result
                  )
                  VALUES (
                      'vaibhav',
                      'goda',
                      'vaigoda@gmail.com',
                      '*****',
                      'M',
                      'The movie was very good. ',
                      NULL
                  );

INSERT INTO minor (
                      fname,
                      lname,
                      email,
                      password,
                      gender,
                      [User text],
                      result
                  )
                  VALUES (
                      'nidhi',
                      'gupta',
                      'nidhi@gmail.com',
                      '****',
                      'F',
                      'My day was awful. I am sad.',
                      NULL
                  );


COMMIT TRANSACTION;
PRAGMA foreign_keys = on;
