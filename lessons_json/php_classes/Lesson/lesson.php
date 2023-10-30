<?php
// lesson class representation, see below for orignal json data
class Lesson {
 public $id; //int
 public $index; //int
 public $unitNumber; //array( undefined )
 public $unitType; //int
 public $unitStyle; //int
 public $unitScope; //int
 public $category; //int
 public $categoryID; //int
 public $name; //String
 public $isCourse; //boolean
 public $disabled; //boolean
 public $done; //boolean
 public $stars; //int
 public $difficulty; //String
 public $countQuiz; //int
 public $countWords; //int
 public $countPhrases; //int
 public $countDone; //int
 public $quizzes;  //array( number )

}
class Sols {
 public $key; //String
 public $audio_updated_at; //int
 public $text; //String

}
class Alts {
 public $key; //String
 public $audio_updated_at; //int
 public $image; //String
 public $image_updated_at; //int
 public $text; //String
 public $phonetic; //String

}
class Quizzes {
 public $id; //int
 public $lesson; //int
 public $type; //String
 public $modifiers; //int
 public $wordID; //int
 public $alternates;  //array( number )
 public $sols; //array( Sols )
 public $alts; //array( Alts )

}
class Application {
public $lesson; //Lesson
 public $quizzes; //array( Quizzes )

}

/*
 respose with 601 json file that represent the lesson no 601
 {
  "lesson": {
    "id": 601,
    "index": 1,
    "unitNumber": null,
    "unitType": 0,
    "unitStyle": 0,
    "unitScope": 0,
    "category": 6,
    "categoryID": 6,
    "name": "ألوان الطبيعة",
    "isCourse": false,
    "disabled": false,
    "done": true,
    "stars": 3,
    "difficulty": "beginner",
    "countQuiz": 25,
    "countWords": 13,
    "countPhrases": 6,
    "countDone": 1,
    "quizzes": [
      626953,
      626954,
      626955,
      626956,
      626957,
      626958,
      626959,
      626960,
      626961,
      626962,
      626963,
      626964,
      626965,
      626966,
      626967,
      626968,
      626969,
      626970,
      626971,
      626972,
      626973,
      626974,
      626975,
      626976,
      626977
    ]
  },
  "quizzes": [
    {
      "id": 626953,
      "lesson": 601,
      "type": "D",
      "modifiers": 327,
      "wordID": 17991,
      "alternates": [
        18076,
        17993,
        18046
      ],
      "sols": [
        {
          "key": "1okYzIJafyvcIMpcmcoFbT1g_UHiKmQh",
          "audio_updated_at": 1580689999,
          "text": "أخضر"
        },
        {
          "key": "Y9_ca-MMhkkirnSYf0ETOUmUTWVN6qLP",
          "audio_updated_at": 1593589605,
          "text": "ثلج"
        },
        {
          "key": "O6iBrT6GiXuC3-tqTmIfCtrqcEywrgbm",
          "audio_updated_at": 1580690009,
          "text": "أبيض"
        },
        {
          "key": "zYChAELXiijd-hYOhzkaOYcjpHMexbA4",
          "audio_updated_at": 1580689632,
          "text": "عشب"
        }
      ],
      "alts": [
        {
          "key": "1okYzIJafyvcIMpcmcoFbT1g_UHiKmQh",
          "audio_updated_at": 1580689999,
          "image": "Nr0tT5oyg_pwDSFM2UQvPwjs0wqi6mWJ",
          "image_updated_at": 1689159103,
          "text": "سبز",
          "phonetic": "sabz"
        },
        {
          "key": "Y9_ca-MMhkkirnSYf0ETOUmUTWVN6qLP",
          "audio_updated_at": 1593589605,
          "image": "tgjSALrNT1HXkujsqdFIkEATNZV9ddoU",
          "image_updated_at": 1689159114,
          "text": "برف",
          "phonetic": "barf"
        },
        {
          "key": "O6iBrT6GiXuC3-tqTmIfCtrqcEywrgbm",
          "audio_updated_at": 1580690009,
          "image": "P-6xnB2QtCk_O1NXAxL7vIXQWGFSb_BI",
          "image_updated_at": 1689159119,
          "text": "سفید",
          "phonetic": "safaid"
        },
        {
          "key": "zYChAELXiijd-hYOhzkaOYcjpHMexbA4",
          "audio_updated_at": 1580689632,
          "text": "گھاس",
          "phonetic": "ghaas",
          "image": "qhLUGifIjfPw9z6zRV-dYAFWpL4kPAOD",
          "image_updated_at": 1689159103
        }
      ]
    },
    {
      "id": 626954,
      "lesson": 601,
      "type": "C1b",
      "modifiers": 72,
      "wordID": 18162,
      "alternates": [
        17993,
        17991
      ],
      "tokens": [
        {
          "key": "tHaDa0kAnaN",
          "text": "کس",
          "raw": {
            "text": "کس",
            "location": 5,
            "length": 2
          },
          "prefix": {
            "text": "",
            "location": 5,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 7,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 4,
            "length": 1
          }
        },
        {
          "key": "tbrCFit5let",
          "text": "رنگ",
          "raw": {
            "text": "رنگ",
            "location": 8,
            "length": 3
          },
          "prefix": {
            "text": "",
            "location": 8,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 11,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 7,
            "length": 1
          }
        },
        {
          "key": "tyk3KkQttEW",
          "text": "ہے۔",
          "raw": {
            "text": "ہے",
            "location": 9,
            "length": 2
          },
          "prefix": {
            "text": "",
            "location": 9,
            "length": 0
          },
          "suffix": {
            "text": "۔",
            "location": 11,
            "length": 1
          },
          "linker": {
            "text": " ",
            "location": 8,
            "length": 1
          }
        },
        {
          "key": "t1wnihJCq16",
          "text": "سبز",
          "raw": {
            "text": "سبز",
            "location": 5,
            "length": 3
          },
          "prefix": {
            "text": "",
            "location": 5,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 8,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 4,
            "length": 1
          }
        },
        {
          "key": "tdx4oToFN16",
          "text": "کا",
          "raw": {
            "text": "کا",
            "location": 12,
            "length": 2
          },
          "prefix": {
            "text": "",
            "location": 12,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 14,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 11,
            "length": 1
          }
        },
        {
          "key": "tSlNIyaBkSB",
          "text": "گھاس",
          "raw": {
            "text": "گھاس",
            "location": 0,
            "length": 4
          },
          "prefix": {
            "text": "",
            "location": 0,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 4,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 0,
            "length": 0
          }
        },
        {
          "key": "tdQ2nHK8rxZ",
          "text": "گلاب",
          "raw": {
            "text": "گلاب",
            "location": 0,
            "length": 4
          },
          "prefix": {
            "text": "",
            "location": 0,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 4,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 0,
            "length": 0
          }
        }
      ],
      "tokensEqualSize": true,
      "ord": [
        "tSlNIyaBkSB",
        "t1wnihJCq16",
        "tyk3KkQttEW"
      ],
      "completeToken": "t1wnihJCq16",
      "tokensPhonetic": [
        {
          "key": "tHaDa0kAnaN",
          "text": "kis",
          "raw": {
            "text": "kis",
            "location": 6,
            "length": 3
          },
          "prefix": {
            "text": "",
            "location": 6,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 9,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 5,
            "length": 1
          }
        },
        {
          "key": "tbrCFit5let",
          "text": "rang",
          "raw": {
            "text": "rang",
            "location": 10,
            "length": 4
          },
          "prefix": {
            "text": "",
            "location": 10,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 14,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 9,
            "length": 1
          }
        },
        {
          "key": "tyk3KkQttEW",
          "text": "hai.",
          "raw": {
            "text": "hai",
            "location": 11,
            "length": 3
          },
          "prefix": {
            "text": "",
            "location": 11,
            "length": 0
          },
          "suffix": {
            "text": ".",
            "location": 14,
            "length": 1
          },
          "linker": {
            "text": " ",
            "location": 10,
            "length": 1
          }
        },
        {
          "key": "t1wnihJCq16",
          "text": "sabz",
          "raw": {
            "text": "sabz",
            "location": 6,
            "length": 4
          },
          "prefix": {
            "text": "",
            "location": 6,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 10,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 5,
            "length": 1
          }
        },
        {
          "key": "tdx4oToFN16",
          "text": "ka",
          "raw": {
            "text": "ka",
            "location": 15,
            "length": 2
          },
          "prefix": {
            "text": "",
            "location": 15,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 17,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 14,
            "length": 1
          }
        },
        {
          "key": "tSlNIyaBkSB",
          "text": "Ghaas",
          "raw": {
            "text": "Ghaas",
            "location": 0,
            "length": 5
          },
          "prefix": {
            "text": "",
            "location": 0,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 5,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 0,
            "length": 0
          }
        },
        {
          "key": "tdQ2nHK8rxZ",
          "text": "Gulab",
          "raw": {
            "text": "Gulab",
            "location": 0,
            "length": 5
          },
          "prefix": {
            "text": "",
            "location": 0,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 5,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 0,
            "length": 0
          }
        }
      ],
      "sols": [
        {
          "key": "RizXNkKlwJqTepMBamclhV9hH4h8vKGX",
          "audio_updated_at": 1580705395,
          "text": "‫العشب أخضر.‬",
          "dictionary": [
            {
              "raw": "العشب",
              "translations": []
            },
            {
              "raw": "أخضر",
              "translations": [
                {
                  "type": "dictionary",
                  "text": "سبز",
                  "phonetic": "sabz"
                }
              ]
            }
          ],
          "phraseType": 1,
          "text_tokens": [
            {
              "raw": {
                "text": "العشب",
                "location": 1,
                "length": 5
              },
              "prefix": {
                "text": "",
                "location": 1,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 6,
                "length": 0
              },
              "linker": {
                "text": "",
                "location": 1,
                "length": 0
              }
            },
            {
              "raw": {
                "text": "أخضر",
                "location": 7,
                "length": 4
              },
              "prefix": {
                "text": "",
                "location": 7,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 11,
                "length": 0
              },
              "linker": {
                "text": " ",
                "location": 6,
                "length": 1
              }
            }
          ]
        },
        {
          "key": "RizXNkKlwJqTepMBamclhV9hH4h8vKGX",
          "audio_updated_at": 1580705395,
          "text": "گھاس سبز ہے۔",
          "phonetic": "Ghaas sabz hai."
        }
      ]
    },
    {
      "id": 626955,
      "lesson": 601,
      "type": "T1",
      "modifiers": 40,
      "wordID": 18170,
      "alternates": [],
      "tokens": [
        {
          "key": "t1sOL8dHgl_",
          "text": "أين",
          "raw": {
            "text": "أين",
            "location": 0,
            "length": 3
          },
          "prefix": {
            "text": "",
            "location": 0,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 3,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 0,
            "length": 0
          }
        },
        {
          "key": "t4dQnPdMmNq",
          "text": "الثلج",
          "raw": {
            "text": "الثلج",
            "location": 1,
            "length": 5
          },
          "prefix": {
            "text": "",
            "location": 1,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 6,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 1,
            "length": 0
          }
        },
        {
          "key": "t_5-Xvp4Ss1",
          "text": "أبيض",
          "raw": {
            "text": "أبيض",
            "location": 7,
            "length": 4
          },
          "prefix": {
            "text": "",
            "location": 7,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 11,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 6,
            "length": 1
          }
        },
        {
          "key": "txbmXdpDuC1",
          "text": "التماسيح؟",
          "raw": {
            "text": "التماسيح",
            "location": 4,
            "length": 8
          },
          "prefix": {
            "text": "",
            "location": 4,
            "length": 0
          },
          "suffix": {
            "text": "؟",
            "location": 12,
            "length": 1
          },
          "linker": {
            "text": " ",
            "location": 3,
            "length": 1
          }
        }
      ],
      "tokensEqualSize": true,
      "ord": [
        "t4dQnPdMmNq",
        "t_5-Xvp4Ss1"
      ],
      "sols": [
        {
          "key": "hP35wEyouJw8xpnsXoJ081tZsQXSoXhg",
          "audio_updated_at": 1688821935,
          "text": "برف سفید ہے۔",
          "phonetic": "Barf safaid hai.",
          "dictionary": [
            {
              "raw": "برف",
              "translations": []
            },
            {
              "raw": "سفید",
              "translations": [
                {
                  "type": "dictionary",
                  "text": "أبيض",
                  "phonetic": null
                }
              ]
            },
            {
              "raw": "ہے",
              "translations": [
                {
                  "type": "verb",
                  "name": {
                    "t": "متّفق ہونا",
                    "m": "يوافق",
                    "phonetic": "muttafiq hona"
                  },
                  "id": 1,
                  "tenseNames": {
                    "pr": "الحاضر",
                    "pa": "ماضي",
                    "fu": "مستقبل"
                  },
                  "conj": {
                    "pr": [
                      {
                        "t": {
                          "key": "ILulDenvPwHSmrUhzuSBdXwvJ-QjKoyp",
                          "text": "میں متّفق ہوتا ہوں",
                          "phonetic": "Mein muttafiq hota hoon",
                          "audio_updated_at": 1580692919
                        },
                        "m": {
                          "text": "أنا أوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "tRwjOBCOhXT8RbfFan5KJLMBmu6fw-2b",
                          "text": "تم متّفق ہوتے ہو",
                          "phonetic": "Tum muttafiq hotay ho",
                          "audio_updated_at": 1580692921
                        },
                        "m": {
                          "text": "أنت توافق"
                        }
                      },
                      {
                        "t": {
                          "key": "v1Y_DdoUpq2lF8amygECA1hyoxaXV-gL",
                          "text": "وہ متّفق ہوتا ہے",
                          "phonetic": "Wo muttafiq hota hai",
                          "audio_updated_at": 1580692923
                        },
                        "m": {
                          "text": "هو يوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "hXk3UMfDAMi5Nq-Dwy0aSGqR7wUM36CA",
                          "text": "وہ متّفق ہوتی ہے",
                          "phonetic": "Wo muttafiq hoti hai",
                          "audio_updated_at": 1580692925
                        },
                        "m": {
                          "text": "هي توافق"
                        }
                      },
                      {
                        "t": {
                          "key": "Z-7SYfgQPo46ZkGsGcRL7FtMn4JjbMi3",
                          "text": "ہم متّفق ہوتے ہیں",
                          "phonetic": "Hum muttafiq hotay hain",
                          "audio_updated_at": 1580692929
                        },
                        "m": {
                          "text": "نحن نوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "YHPOGPQLWeWIL2wzkaadaCzDyOklpbtw",
                          "text": "آپ متّفق ہوتے ہیں",
                          "phonetic": "Aap muttafiq hotay hain",
                          "audio_updated_at": 1580692931
                        },
                        "m": {
                          "text": "أنتم توافقون"
                        }
                      },
                      {
                        "t": {
                          "key": "XstYItwshUedYqu8yaE-eb1JS0dNY_3V",
                          "text": "وہ متّفق ہوتے ہیں",
                          "phonetic": "Wo muttafiq hotay hain",
                          "audio_updated_at": 1580692932
                        },
                        "m": {
                          "text": "هم يوافقون"
                        }
                      }
                    ],
                    "pa": [
                      {
                        "t": {
                          "key": "JYIRRloDnLNan4PYnn6hjcvhMcet0WD1",
                          "text": "میں متّفق ہوا",
                          "phonetic": "Mein muttafiq hua",
                          "audio_updated_at": 1580692934
                        },
                        "m": {
                          "text": "أنا وافقت"
                        }
                      },
                      {
                        "t": {
                          "key": "b89-0T_2GdO9ZWYX6oHtePfHFvl7aGaB",
                          "text": "تم متّفق ہوئے",
                          "phonetic": "Tum muttafiq huay",
                          "audio_updated_at": 1580692936
                        },
                        "m": {
                          "text": "أنت وافقت"
                        }
                      },
                      {
                        "t": {
                          "key": "5Kesu04ngj6TrurmE3DoV24c2DgiRuPi",
                          "text": "وہ متّفق ہوا",
                          "phonetic": "Wo muttafiq hua",
                          "audio_updated_at": 1580692938
                        },
                        "m": {
                          "text": "هو وافق"
                        }
                      },
                      {
                        "t": {
                          "key": "bJnTTyXZzvvQnFBqzhVFtYdjePdGS8Nt",
                          "text": "وہ متّفق ہوئی",
                          "phonetic": "Wo muttafiq hui",
                          "audio_updated_at": 1580692939
                        },
                        "m": {
                          "text": "هي وافقت"
                        }
                      },
                      {
                        "t": {
                          "key": "6jbKTg-yy4CpgadT7AGIlL73edwHln5R",
                          "text": "ہم متّفق ہوئے",
                          "phonetic": "Hum muttafiq huay",
                          "audio_updated_at": 1580692943
                        },
                        "m": {
                          "text": "نحن وافقنا"
                        }
                      },
                      {
                        "t": {
                          "key": "Q4O8uGGY0Yz1Runhm2z3jIrtwe4agkSW",
                          "text": "آپ متّفق ہوئے",
                          "phonetic": "Aap muttafiq huay",
                          "audio_updated_at": 1580692945
                        },
                        "m": {
                          "text": "أنتم وافقتم"
                        }
                      },
                      {
                        "t": {
                          "key": "zDR_uqvyzA2xaP4vPmCaHNC6uvkXoLCN",
                          "text": "وہ متّفق ہوئے",
                          "phonetic": "Wo muttafiq huay",
                          "audio_updated_at": 1580692946
                        },
                        "m": {
                          "text": "هم وافقوا"
                        }
                      }
                    ],
                    "fu": [
                      {
                        "t": {
                          "key": "j6UK9u9ekeOG_VU6w29oNUVI1n-td3qj",
                          "text": "میں متّفق ہوں گا",
                          "phonetic": "Mein muttafiq hoon ga",
                          "audio_updated_at": 1580692948
                        },
                        "m": {
                          "text": "أنا سأوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "oZFt-tLlXNmJnfcC-ZIxitkWJjZsR4DF",
                          "text": "تم متّفق ہو گے",
                          "phonetic": "Tum muttafiq ho gay",
                          "audio_updated_at": 1580692950
                        },
                        "m": {
                          "text": "أنت ستوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "f2yewJfPLzDgQBRrXgu_bSesRq5s3WZt",
                          "text": "وہ متّفق ہوگا",
                          "phonetic": "Wo muttafiq ho ga",
                          "audio_updated_at": 1580692952
                        },
                        "m": {
                          "text": "هو سيوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "POlQ-7Y26Fy6JIDgWRrGgyrosRQvgJf4",
                          "text": "وہ متّفق ہو گی",
                          "phonetic": "Wo muttafiq ho gi",
                          "audio_updated_at": 1580692954
                        },
                        "m": {
                          "text": "هي ستوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "2nh6PEhVjxPVdsWh42jrcdntSDcy7Stp",
                          "text": "ہم متّفق ہوں گے",
                          "phonetic": "Hum muttafiq hon gay",
                          "audio_updated_at": 1580692958
                        },
                        "m": {
                          "text": "نحن سنوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "_TThGfBkwBU1nh9vEXcVXqLAmJKoZ8AG",
                          "text": "آپ متّفق ہوں گے",
                          "phonetic": "Aap muttafiq hon gay",
                          "audio_updated_at": 1580692960
                        },
                        "m": {
                          "text": "أنتم ستوافقون"
                        }
                      },
                      {
                        "t": {
                          "key": "Nl3attkofIOZbIBetJNNRmJIThUIiO3O",
                          "text": "وہ متّفق ہوں گے",
                          "phonetic": "Wo muttafiq hon gay",
                          "audio_updated_at": 1580692962
                        },
                        "m": {
                          "text": "هم سيوافقون"
                        }
                      }
                    ]
                  }
                }
              ]
            }
          ],
          "phraseType": 1,
          "text_tokens": [
            {
              "raw": {
                "text": "برف",
                "location": 0,
                "length": 3
              },
              "prefix": {
                "text": "",
                "location": 0,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 3,
                "length": 0
              },
              "linker": {
                "text": "",
                "location": 0,
                "length": 0
              }
            },
            {
              "raw": {
                "text": "سفید",
                "location": 4,
                "length": 4
              },
              "prefix": {
                "text": "",
                "location": 4,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 8,
                "length": 0
              },
              "linker": {
                "text": " ",
                "location": 3,
                "length": 1
              }
            },
            {
              "raw": {
                "text": "ہے",
                "location": 9,
                "length": 2
              },
              "prefix": {
                "text": "",
                "location": 9,
                "length": 0
              },
              "suffix": {
                "text": "۔",
                "location": 11,
                "length": 1
              },
              "linker": {
                "text": " ",
                "location": 8,
                "length": 1
              }
            }
          ],
          "phonetic_tokens": [
            {
              "raw": {
                "text": "Barf",
                "location": 0,
                "length": 4
              },
              "prefix": {
                "text": "",
                "location": 0,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 4,
                "length": 0
              },
              "linker": {
                "text": "",
                "location": 0,
                "length": 0
              }
            },
            {
              "raw": {
                "text": "safaid",
                "location": 5,
                "length": 6
              },
              "prefix": {
                "text": "",
                "location": 5,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 11,
                "length": 0
              },
              "linker": {
                "text": " ",
                "location": 4,
                "length": 1
              }
            },
            {
              "raw": {
                "text": "hai",
                "location": 12,
                "length": 3
              },
              "prefix": {
                "text": "",
                "location": 12,
                "length": 0
              },
              "suffix": {
                "text": ".",
                "location": 15,
                "length": 1
              },
              "linker": {
                "text": " ",
                "location": 11,
                "length": 1
              }
            }
          ]
        },
        {
          "key": "hP35wEyouJw8xpnsXoJ081tZsQXSoXhg",
          "audio_updated_at": 1688821935,
          "text": "‫الثلج أبيض.‬"
        }
      ]
    },
    {
      "id": 626956,
      "lesson": 601,
      "type": "F",
      "modifiers": 71,
      "wordID": 17952,
      "alternates": [
        18044
      ],
      "sols": [
        {
          "key": "sTR69mgHoTN7xFhpx33iCrfHcpe1a4Cf",
          "audio_updated_at": 1580689992,
          "text": "أزرق"
        },
        {
          "key": "6Y8BIHAMU7ArYSaa-AjG7tBCx07te2lh",
          "audio_updated_at": 1580692097,
          "text": "سماء"
        }
      ],
      "alts": [
        {
          "key": "sTR69mgHoTN7xFhpx33iCrfHcpe1a4Cf",
          "audio_updated_at": 1580689992,
          "text": "نیلا",
          "phonetic": "neela",
          "image": "ojiByLyQsWsWkmBbjin3sRxVD3KVUzpd",
          "image_updated_at": 1689159096
        },
        {
          "key": "6Y8BIHAMU7ArYSaa-AjG7tBCx07te2lh",
          "audio_updated_at": 1580692097,
          "image": "1H-S9h3EwxdX31d0iT9CXAdbjRL2decp",
          "image_updated_at": 1689159113,
          "text": "آسمان",
          "phonetic": "aasman"
        }
      ]
    },
    {
      "id": 626957,
      "lesson": 601,
      "type": "C1b",
      "modifiers": 72,
      "wordID": 18167,
      "alternates": [
        18044
      ],
      "tokens": [
        {
          "key": "tHuSetJtW0t",
          "text": "برف",
          "raw": {
            "text": "برف",
            "location": 0,
            "length": 3
          },
          "prefix": {
            "text": "",
            "location": 0,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 3,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 0,
            "length": 0
          }
        },
        {
          "key": "tpFj6xymfdl",
          "text": "کیا",
          "raw": {
            "text": "کیا",
            "location": 14,
            "length": 3
          },
          "prefix": {
            "text": "",
            "location": 14,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 17,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 13,
            "length": 1
          }
        },
        {
          "key": "tIxPBY2i5fE",
          "text": "آسمان",
          "raw": {
            "text": "آسمان",
            "location": 0,
            "length": 6
          },
          "prefix": {
            "text": "",
            "location": 0,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 6,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 0,
            "length": 0
          }
        },
        {
          "key": "tOzRhwzHm8U",
          "text": "کا",
          "raw": {
            "text": "کا",
            "location": 7,
            "length": 2
          },
          "prefix": {
            "text": "",
            "location": 7,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 9,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 6,
            "length": 1
          }
        },
        {
          "key": "tjBw0D83Phd",
          "text": "کس",
          "raw": {
            "text": "کس",
            "location": 4,
            "length": 2
          },
          "prefix": {
            "text": "",
            "location": 4,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 6,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 3,
            "length": 1
          }
        },
        {
          "key": "t3UE1Rh8fGq",
          "text": "ہے؟",
          "raw": {
            "text": "ہے",
            "location": 18,
            "length": 2
          },
          "prefix": {
            "text": "",
            "location": 18,
            "length": 0
          },
          "suffix": {
            "text": "؟",
            "location": 20,
            "length": 1
          },
          "linker": {
            "text": " ",
            "location": 17,
            "length": 1
          }
        },
        {
          "key": "tjlyD-Pnq34",
          "text": "رنگ",
          "raw": {
            "text": "رنگ",
            "location": 10,
            "length": 3
          },
          "prefix": {
            "text": "",
            "location": 10,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 13,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 9,
            "length": 1
          }
        }
      ],
      "tokensEqualSize": true,
      "ord": [
        "tIxPBY2i5fE",
        "tOzRhwzHm8U",
        "tjlyD-Pnq34",
        "tpFj6xymfdl",
        "t3UE1Rh8fGq"
      ],
      "completeToken": "tIxPBY2i5fE",
      "tokensPhonetic": [
        {
          "key": "tHuSetJtW0t",
          "text": "Barf",
          "raw": {
            "text": "Barf",
            "location": 0,
            "length": 4
          },
          "prefix": {
            "text": "",
            "location": 0,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 4,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 0,
            "length": 0
          }
        },
        {
          "key": "tpFj6xymfdl",
          "text": "kya",
          "raw": {
            "text": "kya",
            "location": 15,
            "length": 3
          },
          "prefix": {
            "text": "",
            "location": 15,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 18,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 14,
            "length": 1
          }
        },
        {
          "key": "tIxPBY2i5fE",
          "text": "Aasman",
          "raw": {
            "text": "Aasman",
            "location": 0,
            "length": 6
          },
          "prefix": {
            "text": "",
            "location": 0,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 6,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 0,
            "length": 0
          }
        },
        {
          "key": "tOzRhwzHm8U",
          "text": "ka",
          "raw": {
            "text": "ka",
            "location": 7,
            "length": 2
          },
          "prefix": {
            "text": "",
            "location": 7,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 9,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 6,
            "length": 1
          }
        },
        {
          "key": "tjBw0D83Phd",
          "text": "kis",
          "raw": {
            "text": "kis",
            "location": 5,
            "length": 3
          },
          "prefix": {
            "text": "",
            "location": 5,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 8,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 4,
            "length": 1
          }
        },
        {
          "key": "t3UE1Rh8fGq",
          "text": "hai?",
          "raw": {
            "text": "hai",
            "location": 19,
            "length": 3
          },
          "prefix": {
            "text": "",
            "location": 19,
            "length": 0
          },
          "suffix": {
            "text": "?",
            "location": 22,
            "length": 1
          },
          "linker": {
            "text": " ",
            "location": 18,
            "length": 1
          }
        },
        {
          "key": "tjlyD-Pnq34",
          "text": "rang",
          "raw": {
            "text": "rang",
            "location": 10,
            "length": 4
          },
          "prefix": {
            "text": "",
            "location": 10,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 14,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 9,
            "length": 1
          }
        }
      ],
      "sols": [
        {
          "key": "Mru5AvwhaT0CF7MOV5zN4pnbOgyUas7G",
          "audio_updated_at": 1688821934,
          "text": "ما لون السماء؟",
          "dictionary": [
            {
              "raw": "ما",
              "translations": [
                {
                  "type": "dictionary",
                  "text": "کیا",
                  "phonetic": "kya"
                }
              ]
            },
            {
              "raw": "لون",
              "translations": [
                {
                  "type": "dictionary",
                  "text": "رنگ",
                  "phonetic": "rang"
                }
              ]
            },
            {
              "raw": "السماء",
              "translations": [
                {
                  "type": "dictionary",
                  "text": "آسمان",
                  "phonetic": "Aasman"
                }
              ]
            }
          ],
          "phraseType": 1,
          "text_tokens": [
            {
              "raw": {
                "text": "ما",
                "location": 0,
                "length": 2
              },
              "prefix": {
                "text": "",
                "location": 0,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 2,
                "length": 0
              },
              "linker": {
                "text": "",
                "location": 0,
                "length": 0
              }
            },
            {
              "raw": {
                "text": "لون",
                "location": 3,
                "length": 3
              },
              "prefix": {
                "text": "",
                "location": 3,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 6,
                "length": 0
              },
              "linker": {
                "text": " ",
                "location": 2,
                "length": 1
              }
            },
            {
              "raw": {
                "text": "السماء",
                "location": 7,
                "length": 6
              },
              "prefix": {
                "text": "",
                "location": 7,
                "length": 0
              },
              "suffix": {
                "text": "؟",
                "location": 13,
                "length": 1
              },
              "linker": {
                "text": " ",
                "location": 6,
                "length": 1
              }
            }
          ]
        },
        {
          "key": "Mru5AvwhaT0CF7MOV5zN4pnbOgyUas7G",
          "audio_updated_at": 1688821934,
          "text": "آسمان کا رنگ کیا ہے؟",
          "phonetic": "Aasman ka rang kya hai?"
        }
      ]
    },
    {
      "id": 626958,
      "lesson": 601,
      "type": "T1",
      "modifiers": 40,
      "wordID": 18168,
      "alternates": [],
      "tokens": [
        {
          "key": "t2byhDwcW9C",
          "text": "الشمس",
          "raw": {
            "text": "الشمس",
            "location": 0,
            "length": 5
          },
          "prefix": {
            "text": "",
            "location": 0,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 5,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 0,
            "length": 0
          }
        },
        {
          "key": "txF4zZNlJdU",
          "text": "السماء",
          "raw": {
            "text": "السماء",
            "location": 1,
            "length": 6
          },
          "prefix": {
            "text": "",
            "location": 1,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 7,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 1,
            "length": 0
          }
        },
        {
          "key": "tQpodobvScp",
          "text": "زرقاء",
          "raw": {
            "text": "زرقاء",
            "location": 8,
            "length": 5
          },
          "prefix": {
            "text": "",
            "location": 8,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 13,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 7,
            "length": 1
          }
        },
        {
          "key": "t21fE2hmSo0",
          "text": "صفراء.",
          "raw": {
            "text": "صفراء",
            "location": 6,
            "length": 5
          },
          "prefix": {
            "text": "",
            "location": 6,
            "length": 0
          },
          "suffix": {
            "text": ".",
            "location": 11,
            "length": 1
          },
          "linker": {
            "text": " ",
            "location": 5,
            "length": 1
          }
        }
      ],
      "tokensEqualSize": true,
      "ord": [
        "txF4zZNlJdU",
        "tQpodobvScp"
      ],
      "sols": [
        {
          "key": "srHCcIYkBC2HIZMeg_R54Ru2C09prHcB",
          "audio_updated_at": 1580705393,
          "text": "آسمان نیلا ہے۔",
          "phonetic": "Aasman neela hai.",
          "dictionary": [
            {
              "raw": "آسمان",
              "translations": [
                {
                  "type": "dictionary",
                  "text": "السماء",
                  "phonetic": null
                }
              ]
            },
            {
              "raw": "نیلا",
              "translations": []
            },
            {
              "raw": "ہے",
              "translations": [
                {
                  "type": "verb",
                  "name": {
                    "t": "متّفق ہونا",
                    "m": "يوافق",
                    "phonetic": "muttafiq hona"
                  },
                  "id": 1,
                  "tenseNames": {
                    "pr": "الحاضر",
                    "pa": "ماضي",
                    "fu": "مستقبل"
                  },
                  "conj": {
                    "pr": [
                      {
                        "t": {
                          "key": "ILulDenvPwHSmrUhzuSBdXwvJ-QjKoyp",
                          "text": "میں متّفق ہوتا ہوں",
                          "phonetic": "Mein muttafiq hota hoon",
                          "audio_updated_at": 1580692919
                        },
                        "m": {
                          "text": "أنا أوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "tRwjOBCOhXT8RbfFan5KJLMBmu6fw-2b",
                          "text": "تم متّفق ہوتے ہو",
                          "phonetic": "Tum muttafiq hotay ho",
                          "audio_updated_at": 1580692921
                        },
                        "m": {
                          "text": "أنت توافق"
                        }
                      },
                      {
                        "t": {
                          "key": "v1Y_DdoUpq2lF8amygECA1hyoxaXV-gL",
                          "text": "وہ متّفق ہوتا ہے",
                          "phonetic": "Wo muttafiq hota hai",
                          "audio_updated_at": 1580692923
                        },
                        "m": {
                          "text": "هو يوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "hXk3UMfDAMi5Nq-Dwy0aSGqR7wUM36CA",
                          "text": "وہ متّفق ہوتی ہے",
                          "phonetic": "Wo muttafiq hoti hai",
                          "audio_updated_at": 1580692925
                        },
                        "m": {
                          "text": "هي توافق"
                        }
                      },
                      {
                        "t": {
                          "key": "Z-7SYfgQPo46ZkGsGcRL7FtMn4JjbMi3",
                          "text": "ہم متّفق ہوتے ہیں",
                          "phonetic": "Hum muttafiq hotay hain",
                          "audio_updated_at": 1580692929
                        },
                        "m": {
                          "text": "نحن نوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "YHPOGPQLWeWIL2wzkaadaCzDyOklpbtw",
                          "text": "آپ متّفق ہوتے ہیں",
                          "phonetic": "Aap muttafiq hotay hain",
                          "audio_updated_at": 1580692931
                        },
                        "m": {
                          "text": "أنتم توافقون"
                        }
                      },
                      {
                        "t": {
                          "key": "XstYItwshUedYqu8yaE-eb1JS0dNY_3V",
                          "text": "وہ متّفق ہوتے ہیں",
                          "phonetic": "Wo muttafiq hotay hain",
                          "audio_updated_at": 1580692932
                        },
                        "m": {
                          "text": "هم يوافقون"
                        }
                      }
                    ],
                    "pa": [
                      {
                        "t": {
                          "key": "JYIRRloDnLNan4PYnn6hjcvhMcet0WD1",
                          "text": "میں متّفق ہوا",
                          "phonetic": "Mein muttafiq hua",
                          "audio_updated_at": 1580692934
                        },
                        "m": {
                          "text": "أنا وافقت"
                        }
                      },
                      {
                        "t": {
                          "key": "b89-0T_2GdO9ZWYX6oHtePfHFvl7aGaB",
                          "text": "تم متّفق ہوئے",
                          "phonetic": "Tum muttafiq huay",
                          "audio_updated_at": 1580692936
                        },
                        "m": {
                          "text": "أنت وافقت"
                        }
                      },
                      {
                        "t": {
                          "key": "5Kesu04ngj6TrurmE3DoV24c2DgiRuPi",
                          "text": "وہ متّفق ہوا",
                          "phonetic": "Wo muttafiq hua",
                          "audio_updated_at": 1580692938
                        },
                        "m": {
                          "text": "هو وافق"
                        }
                      },
                      {
                        "t": {
                          "key": "bJnTTyXZzvvQnFBqzhVFtYdjePdGS8Nt",
                          "text": "وہ متّفق ہوئی",
                          "phonetic": "Wo muttafiq hui",
                          "audio_updated_at": 1580692939
                        },
                        "m": {
                          "text": "هي وافقت"
                        }
                      },
                      {
                        "t": {
                          "key": "6jbKTg-yy4CpgadT7AGIlL73edwHln5R",
                          "text": "ہم متّفق ہوئے",
                          "phonetic": "Hum muttafiq huay",
                          "audio_updated_at": 1580692943
                        },
                        "m": {
                          "text": "نحن وافقنا"
                        }
                      },
                      {
                        "t": {
                          "key": "Q4O8uGGY0Yz1Runhm2z3jIrtwe4agkSW",
                          "text": "آپ متّفق ہوئے",
                          "phonetic": "Aap muttafiq huay",
                          "audio_updated_at": 1580692945
                        },
                        "m": {
                          "text": "أنتم وافقتم"
                        }
                      },
                      {
                        "t": {
                          "key": "zDR_uqvyzA2xaP4vPmCaHNC6uvkXoLCN",
                          "text": "وہ متّفق ہوئے",
                          "phonetic": "Wo muttafiq huay",
                          "audio_updated_at": 1580692946
                        },
                        "m": {
                          "text": "هم وافقوا"
                        }
                      }
                    ],
                    "fu": [
                      {
                        "t": {
                          "key": "j6UK9u9ekeOG_VU6w29oNUVI1n-td3qj",
                          "text": "میں متّفق ہوں گا",
                          "phonetic": "Mein muttafiq hoon ga",
                          "audio_updated_at": 1580692948
                        },
                        "m": {
                          "text": "أنا سأوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "oZFt-tLlXNmJnfcC-ZIxitkWJjZsR4DF",
                          "text": "تم متّفق ہو گے",
                          "phonetic": "Tum muttafiq ho gay",
                          "audio_updated_at": 1580692950
                        },
                        "m": {
                          "text": "أنت ستوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "f2yewJfPLzDgQBRrXgu_bSesRq5s3WZt",
                          "text": "وہ متّفق ہوگا",
                          "phonetic": "Wo muttafiq ho ga",
                          "audio_updated_at": 1580692952
                        },
                        "m": {
                          "text": "هو سيوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "POlQ-7Y26Fy6JIDgWRrGgyrosRQvgJf4",
                          "text": "وہ متّفق ہو گی",
                          "phonetic": "Wo muttafiq ho gi",
                          "audio_updated_at": 1580692954
                        },
                        "m": {
                          "text": "هي ستوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "2nh6PEhVjxPVdsWh42jrcdntSDcy7Stp",
                          "text": "ہم متّفق ہوں گے",
                          "phonetic": "Hum muttafiq hon gay",
                          "audio_updated_at": 1580692958
                        },
                        "m": {
                          "text": "نحن سنوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "_TThGfBkwBU1nh9vEXcVXqLAmJKoZ8AG",
                          "text": "آپ متّفق ہوں گے",
                          "phonetic": "Aap muttafiq hon gay",
                          "audio_updated_at": 1580692960
                        },
                        "m": {
                          "text": "أنتم ستوافقون"
                        }
                      },
                      {
                        "t": {
                          "key": "Nl3attkofIOZbIBetJNNRmJIThUIiO3O",
                          "text": "وہ متّفق ہوں گے",
                          "phonetic": "Wo muttafiq hon gay",
                          "audio_updated_at": 1580692962
                        },
                        "m": {
                          "text": "هم سيوافقون"
                        }
                      }
                    ]
                  }
                }
              ]
            }
          ],
          "phraseType": 1,
          "text_tokens": [
            {
              "raw": {
                "text": "آسمان",
                "location": 0,
                "length": 5
              },
              "prefix": {
                "text": "",
                "location": 0,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 5,
                "length": 0
              },
              "linker": {
                "text": "",
                "location": 0,
                "length": 0
              }
            },
            {
              "raw": {
                "text": "نیلا",
                "location": 6,
                "length": 4
              },
              "prefix": {
                "text": "",
                "location": 6,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 10,
                "length": 0
              },
              "linker": {
                "text": " ",
                "location": 5,
                "length": 1
              }
            },
            {
              "raw": {
                "text": "ہے",
                "location": 11,
                "length": 2
              },
              "prefix": {
                "text": "",
                "location": 11,
                "length": 0
              },
              "suffix": {
                "text": "۔",
                "location": 13,
                "length": 1
              },
              "linker": {
                "text": " ",
                "location": 10,
                "length": 1
              }
            }
          ],
          "phonetic_tokens": [
            {
              "raw": {
                "text": "Aasman",
                "location": 0,
                "length": 6
              },
              "prefix": {
                "text": "",
                "location": 0,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 6,
                "length": 0
              },
              "linker": {
                "text": "",
                "location": 0,
                "length": 0
              }
            },
            {
              "raw": {
                "text": "neela",
                "location": 7,
                "length": 5
              },
              "prefix": {
                "text": "",
                "location": 7,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 12,
                "length": 0
              },
              "linker": {
                "text": " ",
                "location": 6,
                "length": 1
              }
            },
            {
              "raw": {
                "text": "hai",
                "location": 13,
                "length": 3
              },
              "prefix": {
                "text": "",
                "location": 13,
                "length": 0
              },
              "suffix": {
                "text": ".",
                "location": 16,
                "length": 1
              },
              "linker": {
                "text": " ",
                "location": 12,
                "length": 1
              }
            }
          ]
        },
        {
          "key": "srHCcIYkBC2HIZMeg_R54Ru2C09prHcB",
          "audio_updated_at": 1580705393,
          "text": "‫السماء زرقاء.‬"
        }
      ]
    },
    {
      "id": 626959,
      "lesson": 601,
      "type": "F",
      "modifiers": 71,
      "wordID": 18057,
      "alternates": [
        18079
      ],
      "sols": [
        {
          "key": "28wKNL3UREUOPOf6mbaPZI8vu7IcRgoB",
          "audio_updated_at": 1580690011,
          "text": "أصفر"
        },
        {
          "key": "LikwbhJVNvi4vFB2APHafKqeykkqShpl",
          "audio_updated_at": 1580692103,
          "text": "شمس"
        }
      ],
      "alts": [
        {
          "key": "28wKNL3UREUOPOf6mbaPZI8vu7IcRgoB",
          "audio_updated_at": 1580690011,
          "image": "aampjtqIwNMaHmU9Bsdcj4jiRjY6KpKz",
          "image_updated_at": 1689159120,
          "text": "پیلا",
          "phonetic": "peela"
        },
        {
          "key": "LikwbhJVNvi4vFB2APHafKqeykkqShpl",
          "audio_updated_at": 1580692103,
          "text": "سورج",
          "phonetic": "sooraj",
          "image": "p22Q6Q72c2V5kMj9cAe1g91nFGlgWLfx",
          "image_updated_at": 1689159117
        }
      ]
    },
    {
      "id": 626960,
      "lesson": 601,
      "type": "T1b",
      "modifiers": 72,
      "wordID": 18171,
      "alternates": [],
      "tokens": [
        {
          "key": "t_yvRzmucC0",
          "text": "ہیں؟",
          "raw": {
            "text": "ہیں",
            "location": 10,
            "length": 3
          },
          "prefix": {
            "text": "",
            "location": 10,
            "length": 0
          },
          "suffix": {
            "text": "؟",
            "location": 13,
            "length": 1
          },
          "linker": {
            "text": " ",
            "location": 9,
            "length": 1
          }
        },
        {
          "key": "tC-pUjW6GjV",
          "text": "ریچھ",
          "raw": {
            "text": "ریچھ",
            "location": 0,
            "length": 4
          },
          "prefix": {
            "text": "",
            "location": 0,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 4,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 0,
            "length": 0
          }
        },
        {
          "key": "t6qAXbOOGzw",
          "text": "سورج",
          "raw": {
            "text": "سورج",
            "location": 0,
            "length": 4
          },
          "prefix": {
            "text": "",
            "location": 0,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 4,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 0,
            "length": 0
          }
        },
        {
          "key": "tbws8ZNZ9v3",
          "text": "کیا",
          "raw": {
            "text": "کیا",
            "location": 12,
            "length": 3
          },
          "prefix": {
            "text": "",
            "location": 12,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 15,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 11,
            "length": 1
          }
        },
        {
          "key": "toDrZ4EX2yA",
          "text": "کہاں",
          "raw": {
            "text": "کہاں",
            "location": 5,
            "length": 4
          },
          "prefix": {
            "text": "",
            "location": 5,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 9,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 4,
            "length": 1
          }
        },
        {
          "key": "tT0Uo6kOhVO",
          "text": "ہے؟",
          "raw": {
            "text": "ہے",
            "location": 16,
            "length": 2
          },
          "prefix": {
            "text": "",
            "location": 16,
            "length": 0
          },
          "suffix": {
            "text": "؟",
            "location": 18,
            "length": 1
          },
          "linker": {
            "text": " ",
            "location": 15,
            "length": 1
          }
        },
        {
          "key": "tWI7GyxwdH5",
          "text": "رنگ",
          "raw": {
            "text": "رنگ",
            "location": 8,
            "length": 3
          },
          "prefix": {
            "text": "",
            "location": 8,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 11,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 7,
            "length": 1
          }
        },
        {
          "key": "ti3BqsSlZ5o",
          "text": "کا",
          "raw": {
            "text": "کا",
            "location": 5,
            "length": 2
          },
          "prefix": {
            "text": "",
            "location": 5,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 7,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 4,
            "length": 1
          }
        }
      ],
      "tokensEqualSize": true,
      "ord": [
        "t6qAXbOOGzw",
        "ti3BqsSlZ5o",
        "tWI7GyxwdH5",
        "tbws8ZNZ9v3",
        "tT0Uo6kOhVO"
      ],
      "tokensPhonetic": [
        {
          "key": "t_yvRzmucC0",
          "text": "hain?",
          "raw": {
            "text": "hain",
            "location": 13,
            "length": 4
          },
          "prefix": {
            "text": "",
            "location": 13,
            "length": 0
          },
          "suffix": {
            "text": "?",
            "location": 17,
            "length": 1
          },
          "linker": {
            "text": " ",
            "location": 12,
            "length": 1
          }
        },
        {
          "key": "tC-pUjW6GjV",
          "text": "Reechh",
          "raw": {
            "text": "Reechh",
            "location": 0,
            "length": 6
          },
          "prefix": {
            "text": "",
            "location": 0,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 6,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 0,
            "length": 0
          }
        },
        {
          "key": "t6qAXbOOGzw",
          "text": "Sooraj",
          "raw": {
            "text": "Sooraj",
            "location": 0,
            "length": 6
          },
          "prefix": {
            "text": "",
            "location": 0,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 6,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 0,
            "length": 0
          }
        },
        {
          "key": "tbws8ZNZ9v3",
          "text": "kya",
          "raw": {
            "text": "kya",
            "location": 15,
            "length": 3
          },
          "prefix": {
            "text": "",
            "location": 15,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 18,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 14,
            "length": 1
          }
        },
        {
          "key": "toDrZ4EX2yA",
          "text": "kahan",
          "raw": {
            "text": "kahan",
            "location": 7,
            "length": 5
          },
          "prefix": {
            "text": "",
            "location": 7,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 12,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 6,
            "length": 1
          }
        },
        {
          "key": "tT0Uo6kOhVO",
          "text": "hai?",
          "raw": {
            "text": "hai",
            "location": 19,
            "length": 3
          },
          "prefix": {
            "text": "",
            "location": 19,
            "length": 0
          },
          "suffix": {
            "text": "?",
            "location": 22,
            "length": 1
          },
          "linker": {
            "text": " ",
            "location": 18,
            "length": 1
          }
        },
        {
          "key": "tWI7GyxwdH5",
          "text": "rang",
          "raw": {
            "text": "rang",
            "location": 10,
            "length": 4
          },
          "prefix": {
            "text": "",
            "location": 10,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 14,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 9,
            "length": 1
          }
        },
        {
          "key": "ti3BqsSlZ5o",
          "text": "ka",
          "raw": {
            "text": "ka",
            "location": 7,
            "length": 2
          },
          "prefix": {
            "text": "",
            "location": 7,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 9,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 6,
            "length": 1
          }
        }
      ],
      "sols": [
        {
          "key": "c028vEWW-8NuewEycNNscwqOeaGf-JoI",
          "audio_updated_at": 1688821936,
          "text": "ما لون الشمس؟",
          "dictionary": [
            {
              "raw": "ما",
              "translations": [
                {
                  "type": "dictionary",
                  "text": "کیا",
                  "phonetic": "kya"
                }
              ]
            },
            {
              "raw": "لون",
              "translations": [
                {
                  "type": "dictionary",
                  "text": "رنگ",
                  "phonetic": "rang"
                }
              ]
            },
            {
              "raw": "الشمس",
              "translations": [
                {
                  "type": "dictionary",
                  "text": "سورج",
                  "phonetic": "sooraj"
                }
              ]
            }
          ],
          "phraseType": 1,
          "text_tokens": [
            {
              "raw": {
                "text": "ما",
                "location": 0,
                "length": 2
              },
              "prefix": {
                "text": "",
                "location": 0,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 2,
                "length": 0
              },
              "linker": {
                "text": "",
                "location": 0,
                "length": 0
              }
            },
            {
              "raw": {
                "text": "لون",
                "location": 3,
                "length": 3
              },
              "prefix": {
                "text": "",
                "location": 3,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 6,
                "length": 0
              },
              "linker": {
                "text": " ",
                "location": 2,
                "length": 1
              }
            },
            {
              "raw": {
                "text": "الشمس",
                "location": 7,
                "length": 5
              },
              "prefix": {
                "text": "",
                "location": 7,
                "length": 0
              },
              "suffix": {
                "text": "؟",
                "location": 12,
                "length": 1
              },
              "linker": {
                "text": " ",
                "location": 6,
                "length": 1
              }
            }
          ]
        },
        {
          "key": "c028vEWW-8NuewEycNNscwqOeaGf-JoI",
          "audio_updated_at": 1688821936,
          "text": "سورج کا رنگ کیا ہے؟",
          "phonetic": "Sooraj ka rang kya hai?"
        }
      ]
    },
    {
      "id": 626961,
      "lesson": 601,
      "type": "C1b",
      "modifiers": 72,
      "wordID": 18172,
      "alternates": [
        18057
      ],
      "tokens": [
        {
          "key": "tnLOa-UGk5Y",
          "text": "ہیں؟",
          "raw": {
            "text": "ہیں",
            "location": 11,
            "length": 3
          },
          "prefix": {
            "text": "",
            "location": 11,
            "length": 0
          },
          "suffix": {
            "text": "؟",
            "location": 14,
            "length": 1
          },
          "linker": {
            "text": " ",
            "location": 10,
            "length": 1
          }
        },
        {
          "key": "tq9w3fbQaTC",
          "text": "پیلا",
          "raw": {
            "text": "پیلا",
            "location": 5,
            "length": 4
          },
          "prefix": {
            "text": "",
            "location": 5,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 9,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 4,
            "length": 1
          }
        },
        {
          "key": "tP6R_Z5VaWv",
          "text": "زرافے",
          "raw": {
            "text": "زرافے",
            "location": 0,
            "length": 5
          },
          "prefix": {
            "text": "",
            "location": 0,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 5,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 0,
            "length": 0
          }
        },
        {
          "key": "taKLiFwIXeP",
          "text": "سورج",
          "raw": {
            "text": "سورج",
            "location": 0,
            "length": 4
          },
          "prefix": {
            "text": "",
            "location": 0,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 4,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 0,
            "length": 0
          }
        },
        {
          "key": "tNNLja_-7MD",
          "text": "ہے۔",
          "raw": {
            "text": "ہے",
            "location": 10,
            "length": 2
          },
          "prefix": {
            "text": "",
            "location": 10,
            "length": 0
          },
          "suffix": {
            "text": "۔",
            "location": 12,
            "length": 1
          },
          "linker": {
            "text": " ",
            "location": 9,
            "length": 1
          }
        },
        {
          "key": "tdZ4QFxsNcy",
          "text": "کہاں",
          "raw": {
            "text": "کہاں",
            "location": 6,
            "length": 4
          },
          "prefix": {
            "text": "",
            "location": 6,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 10,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 5,
            "length": 1
          }
        }
      ],
      "tokensEqualSize": true,
      "ord": [
        "taKLiFwIXeP",
        "tq9w3fbQaTC",
        "tNNLja_-7MD"
      ],
      "completeToken": "taKLiFwIXeP",
      "tokensPhonetic": [
        {
          "key": "tnLOa-UGk5Y",
          "text": "hain?",
          "raw": {
            "text": "hain",
            "location": 14,
            "length": 4
          },
          "prefix": {
            "text": "",
            "location": 14,
            "length": 0
          },
          "suffix": {
            "text": "?",
            "location": 18,
            "length": 1
          },
          "linker": {
            "text": " ",
            "location": 13,
            "length": 1
          }
        },
        {
          "key": "tq9w3fbQaTC",
          "text": "peela",
          "raw": {
            "text": "peela",
            "location": 7,
            "length": 5
          },
          "prefix": {
            "text": "",
            "location": 7,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 12,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 6,
            "length": 1
          }
        },
        {
          "key": "tP6R_Z5VaWv",
          "text": "Zarafay",
          "raw": {
            "text": "Zarafay",
            "location": 0,
            "length": 7
          },
          "prefix": {
            "text": "",
            "location": 0,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 7,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 0,
            "length": 0
          }
        },
        {
          "key": "taKLiFwIXeP",
          "text": "Sooraj",
          "raw": {
            "text": "Sooraj",
            "location": 0,
            "length": 6
          },
          "prefix": {
            "text": "",
            "location": 0,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 6,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 0,
            "length": 0
          }
        },
        {
          "key": "tNNLja_-7MD",
          "text": "hai.",
          "raw": {
            "text": "hai",
            "location": 13,
            "length": 3
          },
          "prefix": {
            "text": "",
            "location": 13,
            "length": 0
          },
          "suffix": {
            "text": ".",
            "location": 16,
            "length": 1
          },
          "linker": {
            "text": " ",
            "location": 12,
            "length": 1
          }
        },
        {
          "key": "tdZ4QFxsNcy",
          "text": "kahan",
          "raw": {
            "text": "kahan",
            "location": 8,
            "length": 5
          },
          "prefix": {
            "text": "",
            "location": 8,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 13,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 7,
            "length": 1
          }
        }
      ],
      "sols": [
        {
          "key": "0wZRF17w6KxeTqX4TKqs04aK0sMghXSC",
          "audio_updated_at": 1580705388,
          "text": "الشمس صفراء.",
          "dictionary": [
            {
              "raw": "الشمس",
              "translations": [
                {
                  "type": "dictionary",
                  "text": "سورج",
                  "phonetic": "sooraj"
                }
              ]
            },
            {
              "raw": "صفراء",
              "translations": [
                {
                  "type": "dictionary",
                  "text": "پیلا",
                  "phonetic": "peela"
                }
              ]
            }
          ],
          "phraseType": 1,
          "text_tokens": [
            {
              "raw": {
                "text": "الشمس",
                "location": 0,
                "length": 5
              },
              "prefix": {
                "text": "",
                "location": 0,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 5,
                "length": 0
              },
              "linker": {
                "text": "",
                "location": 0,
                "length": 0
              }
            },
            {
              "raw": {
                "text": "صفراء",
                "location": 6,
                "length": 5
              },
              "prefix": {
                "text": "",
                "location": 6,
                "length": 0
              },
              "suffix": {
                "text": ".",
                "location": 11,
                "length": 1
              },
              "linker": {
                "text": " ",
                "location": 5,
                "length": 1
              }
            }
          ]
        },
        {
          "key": "0wZRF17w6KxeTqX4TKqs04aK0sMghXSC",
          "audio_updated_at": 1580705388,
          "text": "سورج پیلا ہے۔",
          "phonetic": "Sooraj peela hai."
        }
      ]
    },
    {
      "id": 626962,
      "lesson": 601,
      "type": "W1b",
      "modifiers": 68,
      "wordID": 17991,
      "alternates": [],
      "tokens": [
        {
          "key": "trWT1fX_1C7",
          "text": "گ",
          "group": 0
        },
        {
          "key": "tHZ9pypDpdz",
          "text": "ا",
          "group": 0
        },
        {
          "key": "tfmiKNlQOQy",
          "text": "س",
          "group": 0
        },
        {
          "key": "teOEjslm71J",
          "text": "ھ",
          "group": 0
        }
      ],
      "tokensEqualSize": false,
      "ord": [
        "trWT1fX_1C7",
        "teOEjslm71J",
        "tHZ9pypDpdz",
        "tfmiKNlQOQy"
      ],
      "tokensPhonetic": [
        {
          "key": "ts4so17hMLH",
          "text": "a",
          "group": 0
        },
        {
          "key": "tDjx5qPnhuZ",
          "text": "g",
          "group": 0
        },
        {
          "key": "tRGS_e4UOek",
          "text": "a",
          "group": 0
        },
        {
          "key": "tDShRkCHH6J",
          "text": "s",
          "group": 0
        },
        {
          "key": "tS11GviTgXs",
          "text": "h",
          "group": 0
        }
      ],
      "ordPhonetic": [
        "tDjx5qPnhuZ",
        "tS11GviTgXs",
        "ts4so17hMLH",
        "tRGS_e4UOek",
        "tDShRkCHH6J"
      ],
      "sols": [
        {
          "key": "zYChAELXiijd-hYOhzkaOYcjpHMexbA4",
          "audio_updated_at": 1580689632,
          "text": "عشب",
          "dictionary": [
            {
              "raw": "عشب",
              "translations": [
                {
                  "type": "dictionary",
                  "text": "گھاس",
                  "phonetic": "ghaas"
                }
              ]
            }
          ],
          "phraseType": 0,
          "text_tokens": [
            {
              "raw": {
                "text": "عشب",
                "location": 0,
                "length": 3
              },
              "prefix": {
                "text": "",
                "location": 0,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 3,
                "length": 0
              },
              "linker": {
                "text": "",
                "location": 0,
                "length": 0
              }
            }
          ]
        },
        {
          "key": "zYChAELXiijd-hYOhzkaOYcjpHMexbA4",
          "audio_updated_at": 1580689632,
          "text_tokens": [
            {
              "raw": {
                "text": "گھاس",
                "location": 0,
                "length": 4
              },
              "prefix": {
                "text": "",
                "location": 0,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 4,
                "length": 0
              },
              "linker": {
                "text": "",
                "location": 0,
                "length": 0
              }
            }
          ],
          "phonetic_tokens": [
            {
              "raw": {
                "text": "ghaas",
                "location": 0,
                "length": 5
              },
              "prefix": {
                "text": "",
                "location": 0,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 5,
                "length": 0
              },
              "linker": {
                "text": "",
                "location": 0,
                "length": 0
              }
            }
          ],
          "text": "گھاس",
          "phonetic": "ghaas",
          "image": "qhLUGifIjfPw9z6zRV-dYAFWpL4kPAOD",
          "image_updated_at": 1689159103
        }
      ]
    },
    {
      "id": 626963,
      "lesson": 601,
      "type": "C2b",
      "modifiers": 92,
      "wordID": 18162,
      "alternates": [
        17991
      ],
      "tokens": [
        {
          "key": "tNBQtdLvnUA",
          "text": "ا",
          "group": 0
        },
        {
          "key": "telp5biqyhn",
          "text": "گ",
          "group": 0
        },
        {
          "key": "tBifWAChjJK",
          "text": "ھ",
          "group": 0
        },
        {
          "key": "t2ki1pagFhh",
          "text": "س",
          "group": 0
        }
      ],
      "tokensEqualSize": false,
      "ord": [
        "telp5biqyhn",
        "tBifWAChjJK",
        "tNBQtdLvnUA",
        "t2ki1pagFhh"
      ],
      "tokensPhonetic": [
        {
          "key": "ttCxVEGJtuY",
          "text": "G",
          "group": 0
        },
        {
          "key": "tDay4M39T6s",
          "text": "s",
          "group": 0
        },
        {
          "key": "txrtpy6B9I4",
          "text": "a",
          "group": 0
        },
        {
          "key": "tZbPpR2SQJ1",
          "text": "a",
          "group": 0
        },
        {
          "key": "twLGz2aWLNW",
          "text": "h",
          "group": 0
        }
      ],
      "ordPhonetic": [
        "ttCxVEGJtuY",
        "twLGz2aWLNW",
        "tZbPpR2SQJ1",
        "txrtpy6B9I4",
        "tDay4M39T6s"
      ],
      "sols": [
        {
          "key": "RizXNkKlwJqTepMBamclhV9hH4h8vKGX",
          "audio_updated_at": 1580705395,
          "text": "‫العشب أخضر.‬",
          "dictionary": [
            {
              "raw": "العشب",
              "translations": []
            },
            {
              "raw": "أخضر",
              "translations": [
                {
                  "type": "dictionary",
                  "text": "سبز",
                  "phonetic": "sabz"
                }
              ]
            }
          ],
          "phraseType": 1,
          "text_tokens": [
            {
              "raw": {
                "text": "العشب",
                "location": 1,
                "length": 5
              },
              "prefix": {
                "text": "",
                "location": 1,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 6,
                "length": 0
              },
              "linker": {
                "text": "",
                "location": 1,
                "length": 0
              }
            },
            {
              "raw": {
                "text": "أخضر",
                "location": 7,
                "length": 4
              },
              "prefix": {
                "text": "",
                "location": 7,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 11,
                "length": 0
              },
              "linker": {
                "text": " ",
                "location": 6,
                "length": 1
              }
            }
          ]
        },
        {
          "key": "RizXNkKlwJqTepMBamclhV9hH4h8vKGX",
          "audio_updated_at": 1580705395,
          "text_tokens": [
            {
              "raw": {
                "text": "گھاس",
                "location": 0,
                "length": 4
              },
              "prefix": {
                "text": "",
                "location": 0,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 4,
                "length": 0
              },
              "linker": {
                "text": "",
                "location": 0,
                "length": 0
              }
            },
            {
              "raw": {
                "text": "سبز",
                "location": 5,
                "length": 3
              },
              "prefix": {
                "text": "",
                "location": 5,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 8,
                "length": 0
              },
              "linker": {
                "text": " ",
                "location": 4,
                "length": 1
              }
            },
            {
              "raw": {
                "text": "ہے",
                "location": 9,
                "length": 2
              },
              "prefix": {
                "text": "",
                "location": 9,
                "length": 0
              },
              "suffix": {
                "text": "۔",
                "location": 11,
                "length": 1
              },
              "linker": {
                "text": " ",
                "location": 8,
                "length": 1
              }
            }
          ],
          "phonetic_tokens": [
            {
              "raw": {
                "text": "Ghaas",
                "location": 0,
                "length": 5
              },
              "prefix": {
                "text": "",
                "location": 0,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 5,
                "length": 0
              },
              "linker": {
                "text": "",
                "location": 0,
                "length": 0
              }
            },
            {
              "raw": {
                "text": "sabz",
                "location": 6,
                "length": 4
              },
              "prefix": {
                "text": "",
                "location": 6,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 10,
                "length": 0
              },
              "linker": {
                "text": " ",
                "location": 5,
                "length": 1
              }
            },
            {
              "raw": {
                "text": "hai",
                "location": 11,
                "length": 3
              },
              "prefix": {
                "text": "",
                "location": 11,
                "length": 0
              },
              "suffix": {
                "text": ".",
                "location": 14,
                "length": 1
              },
              "linker": {
                "text": " ",
                "location": 10,
                "length": 1
              }
            }
          ],
          "text": "گھاس سبز ہے۔",
          "phonetic": "Ghaas sabz hai."
        }
      ]
    },
    {
      "id": 626964,
      "lesson": 601,
      "type": "Q",
      "modifiers": 41,
      "wordID": 18046,
      "alternates": [
        17991,
        18057
      ],
      "sols": [
        {
          "key": "Y9_ca-MMhkkirnSYf0ETOUmUTWVN6qLP",
          "audio_updated_at": 1593589605,
          "text": "برف",
          "phonetic": "barf",
          "dictionary": [
            {
              "raw": "برف",
              "translations": [
                {
                  "type": "dictionary",
                  "text": "ثلج",
                  "phonetic": null
                }
              ]
            }
          ],
          "phraseType": 0,
          "text_tokens": [
            {
              "raw": {
                "text": "برف",
                "location": 0,
                "length": 3
              },
              "prefix": {
                "text": "",
                "location": 0,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 3,
                "length": 0
              },
              "linker": {
                "text": "",
                "location": 0,
                "length": 0
              }
            }
          ],
          "phonetic_tokens": [
            {
              "raw": {
                "text": "barf",
                "location": 0,
                "length": 4
              },
              "prefix": {
                "text": "",
                "location": 0,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 4,
                "length": 0
              },
              "linker": {
                "text": "",
                "location": 0,
                "length": 0
              }
            }
          ]
        },
        {
          "key": "zYChAELXiijd-hYOhzkaOYcjpHMexbA4",
          "text": "گھاس",
          "phonetic": "ghaas"
        },
        {
          "key": "LikwbhJVNvi4vFB2APHafKqeykkqShpl",
          "text": "سورج",
          "phonetic": "sooraj"
        }
      ],
      "alts": [
        {
          "key": "Y9_ca-MMhkkirnSYf0ETOUmUTWVN6qLP",
          "audio_updated_at": 1593589605,
          "text": "ثلج"
        },
        {
          "key": "zYChAELXiijd-hYOhzkaOYcjpHMexbA4",
          "audio_updated_at": 1580689632,
          "text": "عشب"
        },
        {
          "key": "LikwbhJVNvi4vFB2APHafKqeykkqShpl",
          "audio_updated_at": 1580692103,
          "text": "شمس"
        }
      ]
    },
    {
      "id": 626965,
      "lesson": 601,
      "type": "Qb",
      "modifiers": 73,
      "wordID": 18170,
      "alternates": [
        18162,
        18167
      ],
      "sols": [
        {
          "key": "hP35wEyouJw8xpnsXoJ081tZsQXSoXhg",
          "audio_updated_at": 1688821935,
          "text": "‫الثلج أبيض.‬",
          "dictionary": [
            {
              "raw": "الثلج",
              "translations": [
                {
                  "type": "dictionary",
                  "text": "برف",
                  "phonetic": "barf"
                }
              ]
            },
            {
              "raw": "أبيض",
              "translations": [
                {
                  "type": "dictionary",
                  "text": "سفید",
                  "phonetic": "safaid"
                }
              ]
            }
          ],
          "phraseType": 1,
          "text_tokens": [
            {
              "raw": {
                "text": "الثلج",
                "location": 1,
                "length": 5
              },
              "prefix": {
                "text": "",
                "location": 1,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 6,
                "length": 0
              },
              "linker": {
                "text": "",
                "location": 1,
                "length": 0
              }
            },
            {
              "raw": {
                "text": "أبيض",
                "location": 7,
                "length": 4
              },
              "prefix": {
                "text": "",
                "location": 7,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 11,
                "length": 0
              },
              "linker": {
                "text": " ",
                "location": 6,
                "length": 1
              }
            }
          ]
        },
        {
          "key": "RizXNkKlwJqTepMBamclhV9hH4h8vKGX",
          "text": "‫العشب أخضر.‬"
        },
        {
          "key": "Mru5AvwhaT0CF7MOV5zN4pnbOgyUas7G",
          "text": "ما لون السماء؟"
        }
      ],
      "alts": [
        {
          "key": "hP35wEyouJw8xpnsXoJ081tZsQXSoXhg",
          "audio_updated_at": 1688821935,
          "text": "برف سفید ہے۔",
          "phonetic": "Barf safaid hai."
        },
        {
          "key": "RizXNkKlwJqTepMBamclhV9hH4h8vKGX",
          "audio_updated_at": 1580705395,
          "text": "گھاس سبز ہے۔",
          "phonetic": "Ghaas sabz hai."
        },
        {
          "key": "Mru5AvwhaT0CF7MOV5zN4pnbOgyUas7G",
          "audio_updated_at": 1688821934,
          "text": "آسمان کا رنگ کیا ہے؟",
          "phonetic": "Aasman ka rang kya hai?"
        }
      ]
    },
    {
      "id": 626966,
      "lesson": 601,
      "type": "T1",
      "modifiers": 40,
      "wordID": 18167,
      "alternates": [],
      "tokens": [
        {
          "key": "t09EgW5lKxC",
          "text": "الجِمال",
          "raw": {
            "text": "الجِمال",
            "location": 5,
            "length": 7
          },
          "prefix": {
            "text": "",
            "location": 5,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 12,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 4,
            "length": 1
          }
        },
        {
          "key": "tOIRrZx45kY",
          "text": "ما",
          "raw": {
            "text": "ما",
            "location": 0,
            "length": 2
          },
          "prefix": {
            "text": "",
            "location": 0,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 2,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 0,
            "length": 0
          }
        },
        {
          "key": "tmUYvro4FzP",
          "text": "أين",
          "raw": {
            "text": "أين",
            "location": 1,
            "length": 3
          },
          "prefix": {
            "text": "",
            "location": 1,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 4,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 1,
            "length": 0
          }
        },
        {
          "key": "t3ZKPnHanG5",
          "text": "السماء؟",
          "raw": {
            "text": "السماء",
            "location": 7,
            "length": 6
          },
          "prefix": {
            "text": "",
            "location": 7,
            "length": 0
          },
          "suffix": {
            "text": "؟",
            "location": 13,
            "length": 1
          },
          "linker": {
            "text": " ",
            "location": 6,
            "length": 1
          }
        },
        {
          "key": "tvRCWmUM3RK",
          "text": "لون",
          "raw": {
            "text": "لون",
            "location": 3,
            "length": 3
          },
          "prefix": {
            "text": "",
            "location": 3,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 6,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 2,
            "length": 1
          }
        }
      ],
      "tokensEqualSize": true,
      "ord": [
        "tOIRrZx45kY",
        "tvRCWmUM3RK",
        "t3ZKPnHanG5"
      ],
      "sols": [
        {
          "key": "Mru5AvwhaT0CF7MOV5zN4pnbOgyUas7G",
          "audio_updated_at": 1688821934,
          "text": "آسمان کا رنگ کیا ہے؟",
          "phonetic": "Aasman ka rang kya hai?",
          "dictionary": [
            {
              "raw": "آسمان",
              "translations": [
                {
                  "type": "dictionary",
                  "text": "السماء",
                  "phonetic": null
                }
              ]
            },
            {
              "raw": "کا",
              "translations": []
            },
            {
              "raw": "رنگ",
              "translations": [
                {
                  "type": "dictionary",
                  "text": "لون",
                  "phonetic": null
                }
              ]
            },
            {
              "raw": "کیا",
              "translations": [
                {
                  "type": "verb",
                  "name": {
                    "t": "اعتراض کرنا",
                    "m": "يجادل",
                    "phonetic": "aitraz karna"
                  },
                  "id": 3,
                  "tenseNames": {
                    "pr": "الحاضر",
                    "pa": "ماضي",
                    "fu": "مستقبل"
                  },
                  "conj": {
                    "pr": [
                      {
                        "t": {
                          "key": "NbVQRNn_ONTnX_KzQwYj_EI2UEiOi1n_",
                          "text": "میں اعتراض کرتا ہوں",
                          "phonetic": "Mein aitraz karta hoon",
                          "audio_updated_at": 1580693005
                        },
                        "m": {
                          "text": "أنا أجادل"
                        }
                      },
                      {
                        "t": {
                          "key": "qCyWDlCHwfErksUEAP_yrsXYB-7O5qah",
                          "text": "تم اعتراض کرتے ہو",
                          "phonetic": "Tum aitraz kartay ho",
                          "audio_updated_at": 1580693007
                        },
                        "m": {
                          "text": "أنت تجادل"
                        }
                      },
                      {
                        "t": {
                          "key": "ILMaHZbn7wtGOmfLqiyzGS3tFAb1WZGq",
                          "text": "وہ اعتراض کرتا ہے",
                          "phonetic": "Wo aitraz karta hai",
                          "audio_updated_at": 1580693009
                        },
                        "m": {
                          "text": "هو يجادل"
                        }
                      },
                      {
                        "t": {
                          "key": "0034Zt-Aq1p6E0OOC-aCVE-cv84klfhF",
                          "text": "وہ اعتراض کرتی ہے",
                          "phonetic": "Wo aitraz karti hai",
                          "audio_updated_at": 1580693010
                        },
                        "m": {
                          "text": "هي تجادل"
                        }
                      },
                      {
                        "t": {
                          "key": "7JFKq35f4sfmNrtV8ztizKfY0EgwA4K2",
                          "text": "ہم اعتراض کرتے ہیں",
                          "phonetic": "Hum aitraz kartay hain",
                          "audio_updated_at": 1580693014
                        },
                        "m": {
                          "text": "نحن نجادل"
                        }
                      },
                      {
                        "t": {
                          "key": "s0T-VSgsJit3qB2AOL9Xw99Tld13LO2j",
                          "text": "آپ اعتراض کرتے ہیں",
                          "phonetic": "Aap aitraz kartay hain",
                          "audio_updated_at": 1580693016
                        },
                        "m": {
                          "text": "أنتم تجادلون"
                        }
                      },
                      {
                        "t": {
                          "key": "C8J8CSypyAz99l66aPLMGrGMK-DX9iea",
                          "text": "وہ اعتراض کرتے ہیں",
                          "phonetic": "Wo aitraz kartay hain",
                          "audio_updated_at": 1580693017
                        },
                        "m": {
                          "text": "هم يجادلون"
                        }
                      }
                    ],
                    "pa": [
                      {
                        "t": {
                          "key": "12vfaq_pqoMqBMDkQy1gvz9wpvcoKD4O",
                          "text": "میں نے اعتراض کیا",
                          "phonetic": "Mein ne aitraz kiya",
                          "audio_updated_at": 1580693019
                        },
                        "m": {
                          "text": "أنا جادلت"
                        }
                      },
                      {
                        "t": {
                          "key": "qJQsFj1joTg9gvSm2rLXSNfRv2se2kNT",
                          "text": "تم نے اعتراض کیا",
                          "phonetic": "Tum ne aitraz kiya",
                          "audio_updated_at": 1580693021
                        },
                        "m": {
                          "text": "أنت جادلت"
                        }
                      },
                      {
                        "t": {
                          "key": "rZgcahFxzLiFSNe4JHj1FsFSOJpOnSQT",
                          "text": "اس نے اعتراض کیا",
                          "phonetic": "Us ne aitraz kiya",
                          "audio_updated_at": 1580693022
                        },
                        "m": {
                          "text": "هو جادل"
                        }
                      },
                      {
                        "t": {
                          "key": "g31hadC7nwexcIkhvIDRV9gFO0accDdb",
                          "text": "اس نے اعتراض کیا",
                          "phonetic": "Us ne aitraz kiya",
                          "audio_updated_at": 1580693024
                        },
                        "m": {
                          "text": "هي جادلت"
                        }
                      },
                      {
                        "t": {
                          "key": "kaZS0jQA-8fa6J2aw-6TmD0KIUhJXmlV",
                          "text": "ہم نے اعتراض کیا",
                          "phonetic": "Hum ne aitraz kiya",
                          "audio_updated_at": 1580693027
                        },
                        "m": {
                          "text": "نحن جادلنا"
                        }
                      },
                      {
                        "t": {
                          "key": "PgMtOMPuC52J9xsOP55jXqbIGD4eyJn6",
                          "text": "آپ نے اعتراض کیا",
                          "phonetic": "Aap ne aitraz kiya",
                          "audio_updated_at": 1580693029
                        },
                        "m": {
                          "text": "أنتم جادلتم"
                        }
                      },
                      {
                        "t": {
                          "key": "LY2Cu1ar968fdpxumU9vqGgAorVbvCQi",
                          "text": "انہوں نے اعتراض کیا",
                          "phonetic": "Unhon ne aitraz kiya",
                          "audio_updated_at": 1580693031
                        },
                        "m": {
                          "text": "هم جادلوا"
                        }
                      }
                    ],
                    "fu": [
                      {
                        "t": {
                          "key": "LYXMlh2Q_gueALQxCKTP_n_SGuUP_apB",
                          "text": "میں اعتراض کروں گا",
                          "phonetic": "Mein aitraz karoon ga",
                          "audio_updated_at": 1580693033
                        },
                        "m": {
                          "text": "أنا سأجادل"
                        }
                      },
                      {
                        "t": {
                          "key": "qxeq4L0aiz1s42qwj5RiJpEcJqzaYEF6",
                          "text": "تم اعتراض کرو گے",
                          "phonetic": "Tum aitraz karo gay",
                          "audio_updated_at": 1580693034
                        },
                        "m": {
                          "text": "أنت ستجادل"
                        }
                      },
                      {
                        "t": {
                          "key": "BZW_R_ybeGO6CKFD9o6d75dFfLaYncTA",
                          "text": "وہ اعتراض کرے گا",
                          "phonetic": "Wo aitraz karay ga",
                          "audio_updated_at": 1580693036
                        },
                        "m": {
                          "text": "هو سيجادل"
                        }
                      },
                      {
                        "t": {
                          "key": "a5BjGeBRNJQZV7QXqCQE6JEoDLaJsPVR",
                          "text": "وہ اعتراض کرے گی",
                          "phonetic": "Wo aitraz karay gi",
                          "audio_updated_at": 1580693038
                        },
                        "m": {
                          "text": "هي ستجادل"
                        }
                      },
                      {
                        "t": {
                          "key": "BTm6gCsxrNIevC8inUYk8O97_Zlc7gk_",
                          "text": "ہم اعتراض کریں گے",
                          "phonetic": "Hum aitraz karain gay",
                          "audio_updated_at": 1580693041
                        },
                        "m": {
                          "text": "نحن سنجادل"
                        }
                      },
                      {
                        "t": {
                          "key": "hSZNzAxa80aaxMtEAlebaAZQZZQVMlAi",
                          "text": "آپ اعتراض کریں گے",
                          "phonetic": "Aap aitraz karain gay",
                          "audio_updated_at": 1580693043
                        },
                        "m": {
                          "text": "أنتم ستجادلون"
                        }
                      },
                      {
                        "t": {
                          "key": "VPcwX-Od7zN1ygjXDuz-RXKU41u_uT4H",
                          "text": "وہ اعتراض کریں گے",
                          "phonetic": "Wo aitraz karain gay",
                          "audio_updated_at": 1580693045
                        },
                        "m": {
                          "text": "هم سيجادلون"
                        }
                      }
                    ]
                  }
                }
              ]
            },
            {
              "raw": "ہے",
              "translations": [
                {
                  "type": "verb",
                  "name": {
                    "t": "متّفق ہونا",
                    "m": "يوافق",
                    "phonetic": "muttafiq hona"
                  },
                  "id": 1,
                  "tenseNames": {
                    "pr": "الحاضر",
                    "pa": "ماضي",
                    "fu": "مستقبل"
                  },
                  "conj": {
                    "pr": [
                      {
                        "t": {
                          "key": "ILulDenvPwHSmrUhzuSBdXwvJ-QjKoyp",
                          "text": "میں متّفق ہوتا ہوں",
                          "phonetic": "Mein muttafiq hota hoon",
                          "audio_updated_at": 1580692919
                        },
                        "m": {
                          "text": "أنا أوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "tRwjOBCOhXT8RbfFan5KJLMBmu6fw-2b",
                          "text": "تم متّفق ہوتے ہو",
                          "phonetic": "Tum muttafiq hotay ho",
                          "audio_updated_at": 1580692921
                        },
                        "m": {
                          "text": "أنت توافق"
                        }
                      },
                      {
                        "t": {
                          "key": "v1Y_DdoUpq2lF8amygECA1hyoxaXV-gL",
                          "text": "وہ متّفق ہوتا ہے",
                          "phonetic": "Wo muttafiq hota hai",
                          "audio_updated_at": 1580692923
                        },
                        "m": {
                          "text": "هو يوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "hXk3UMfDAMi5Nq-Dwy0aSGqR7wUM36CA",
                          "text": "وہ متّفق ہوتی ہے",
                          "phonetic": "Wo muttafiq hoti hai",
                          "audio_updated_at": 1580692925
                        },
                        "m": {
                          "text": "هي توافق"
                        }
                      },
                      {
                        "t": {
                          "key": "Z-7SYfgQPo46ZkGsGcRL7FtMn4JjbMi3",
                          "text": "ہم متّفق ہوتے ہیں",
                          "phonetic": "Hum muttafiq hotay hain",
                          "audio_updated_at": 1580692929
                        },
                        "m": {
                          "text": "نحن نوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "YHPOGPQLWeWIL2wzkaadaCzDyOklpbtw",
                          "text": "آپ متّفق ہوتے ہیں",
                          "phonetic": "Aap muttafiq hotay hain",
                          "audio_updated_at": 1580692931
                        },
                        "m": {
                          "text": "أنتم توافقون"
                        }
                      },
                      {
                        "t": {
                          "key": "XstYItwshUedYqu8yaE-eb1JS0dNY_3V",
                          "text": "وہ متّفق ہوتے ہیں",
                          "phonetic": "Wo muttafiq hotay hain",
                          "audio_updated_at": 1580692932
                        },
                        "m": {
                          "text": "هم يوافقون"
                        }
                      }
                    ],
                    "pa": [
                      {
                        "t": {
                          "key": "JYIRRloDnLNan4PYnn6hjcvhMcet0WD1",
                          "text": "میں متّفق ہوا",
                          "phonetic": "Mein muttafiq hua",
                          "audio_updated_at": 1580692934
                        },
                        "m": {
                          "text": "أنا وافقت"
                        }
                      },
                      {
                        "t": {
                          "key": "b89-0T_2GdO9ZWYX6oHtePfHFvl7aGaB",
                          "text": "تم متّفق ہوئے",
                          "phonetic": "Tum muttafiq huay",
                          "audio_updated_at": 1580692936
                        },
                        "m": {
                          "text": "أنت وافقت"
                        }
                      },
                      {
                        "t": {
                          "key": "5Kesu04ngj6TrurmE3DoV24c2DgiRuPi",
                          "text": "وہ متّفق ہوا",
                          "phonetic": "Wo muttafiq hua",
                          "audio_updated_at": 1580692938
                        },
                        "m": {
                          "text": "هو وافق"
                        }
                      },
                      {
                        "t": {
                          "key": "bJnTTyXZzvvQnFBqzhVFtYdjePdGS8Nt",
                          "text": "وہ متّفق ہوئی",
                          "phonetic": "Wo muttafiq hui",
                          "audio_updated_at": 1580692939
                        },
                        "m": {
                          "text": "هي وافقت"
                        }
                      },
                      {
                        "t": {
                          "key": "6jbKTg-yy4CpgadT7AGIlL73edwHln5R",
                          "text": "ہم متّفق ہوئے",
                          "phonetic": "Hum muttafiq huay",
                          "audio_updated_at": 1580692943
                        },
                        "m": {
                          "text": "نحن وافقنا"
                        }
                      },
                      {
                        "t": {
                          "key": "Q4O8uGGY0Yz1Runhm2z3jIrtwe4agkSW",
                          "text": "آپ متّفق ہوئے",
                          "phonetic": "Aap muttafiq huay",
                          "audio_updated_at": 1580692945
                        },
                        "m": {
                          "text": "أنتم وافقتم"
                        }
                      },
                      {
                        "t": {
                          "key": "zDR_uqvyzA2xaP4vPmCaHNC6uvkXoLCN",
                          "text": "وہ متّفق ہوئے",
                          "phonetic": "Wo muttafiq huay",
                          "audio_updated_at": 1580692946
                        },
                        "m": {
                          "text": "هم وافقوا"
                        }
                      }
                    ],
                    "fu": [
                      {
                        "t": {
                          "key": "j6UK9u9ekeOG_VU6w29oNUVI1n-td3qj",
                          "text": "میں متّفق ہوں گا",
                          "phonetic": "Mein muttafiq hoon ga",
                          "audio_updated_at": 1580692948
                        },
                        "m": {
                          "text": "أنا سأوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "oZFt-tLlXNmJnfcC-ZIxitkWJjZsR4DF",
                          "text": "تم متّفق ہو گے",
                          "phonetic": "Tum muttafiq ho gay",
                          "audio_updated_at": 1580692950
                        },
                        "m": {
                          "text": "أنت ستوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "f2yewJfPLzDgQBRrXgu_bSesRq5s3WZt",
                          "text": "وہ متّفق ہوگا",
                          "phonetic": "Wo muttafiq ho ga",
                          "audio_updated_at": 1580692952
                        },
                        "m": {
                          "text": "هو سيوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "POlQ-7Y26Fy6JIDgWRrGgyrosRQvgJf4",
                          "text": "وہ متّفق ہو گی",
                          "phonetic": "Wo muttafiq ho gi",
                          "audio_updated_at": 1580692954
                        },
                        "m": {
                          "text": "هي ستوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "2nh6PEhVjxPVdsWh42jrcdntSDcy7Stp",
                          "text": "ہم متّفق ہوں گے",
                          "phonetic": "Hum muttafiq hon gay",
                          "audio_updated_at": 1580692958
                        },
                        "m": {
                          "text": "نحن سنوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "_TThGfBkwBU1nh9vEXcVXqLAmJKoZ8AG",
                          "text": "آپ متّفق ہوں گے",
                          "phonetic": "Aap muttafiq hon gay",
                          "audio_updated_at": 1580692960
                        },
                        "m": {
                          "text": "أنتم ستوافقون"
                        }
                      },
                      {
                        "t": {
                          "key": "Nl3attkofIOZbIBetJNNRmJIThUIiO3O",
                          "text": "وہ متّفق ہوں گے",
                          "phonetic": "Wo muttafiq hon gay",
                          "audio_updated_at": 1580692962
                        },
                        "m": {
                          "text": "هم سيوافقون"
                        }
                      }
                    ]
                  }
                }
              ]
            }
          ],
          "phraseType": 1,
          "text_tokens": [
            {
              "raw": {
                "text": "آسمان",
                "location": 0,
                "length": 6
              },
              "prefix": {
                "text": "",
                "location": 0,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 6,
                "length": 0
              },
              "linker": {
                "text": "",
                "location": 0,
                "length": 0
              }
            },
            {
              "raw": {
                "text": "کا",
                "location": 7,
                "length": 2
              },
              "prefix": {
                "text": "",
                "location": 7,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 9,
                "length": 0
              },
              "linker": {
                "text": " ",
                "location": 6,
                "length": 1
              }
            },
            {
              "raw": {
                "text": "رنگ",
                "location": 10,
                "length": 3
              },
              "prefix": {
                "text": "",
                "location": 10,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 13,
                "length": 0
              },
              "linker": {
                "text": " ",
                "location": 9,
                "length": 1
              }
            },
            {
              "raw": {
                "text": "کیا",
                "location": 14,
                "length": 3
              },
              "prefix": {
                "text": "",
                "location": 14,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 17,
                "length": 0
              },
              "linker": {
                "text": " ",
                "location": 13,
                "length": 1
              }
            },
            {
              "raw": {
                "text": "ہے",
                "location": 18,
                "length": 2
              },
              "prefix": {
                "text": "",
                "location": 18,
                "length": 0
              },
              "suffix": {
                "text": "؟",
                "location": 20,
                "length": 1
              },
              "linker": {
                "text": " ",
                "location": 17,
                "length": 1
              }
            }
          ],
          "phonetic_tokens": [
            {
              "raw": {
                "text": "Aasman",
                "location": 0,
                "length": 6
              },
              "prefix": {
                "text": "",
                "location": 0,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 6,
                "length": 0
              },
              "linker": {
                "text": "",
                "location": 0,
                "length": 0
              }
            },
            {
              "raw": {
                "text": "ka",
                "location": 7,
                "length": 2
              },
              "prefix": {
                "text": "",
                "location": 7,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 9,
                "length": 0
              },
              "linker": {
                "text": " ",
                "location": 6,
                "length": 1
              }
            },
            {
              "raw": {
                "text": "rang",
                "location": 10,
                "length": 4
              },
              "prefix": {
                "text": "",
                "location": 10,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 14,
                "length": 0
              },
              "linker": {
                "text": " ",
                "location": 9,
                "length": 1
              }
            },
            {
              "raw": {
                "text": "kya",
                "location": 15,
                "length": 3
              },
              "prefix": {
                "text": "",
                "location": 15,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 18,
                "length": 0
              },
              "linker": {
                "text": " ",
                "location": 14,
                "length": 1
              }
            },
            {
              "raw": {
                "text": "hai",
                "location": 19,
                "length": 3
              },
              "prefix": {
                "text": "",
                "location": 19,
                "length": 0
              },
              "suffix": {
                "text": "?",
                "location": 22,
                "length": 1
              },
              "linker": {
                "text": " ",
                "location": 18,
                "length": 1
              }
            }
          ]
        },
        {
          "key": "Mru5AvwhaT0CF7MOV5zN4pnbOgyUas7G",
          "audio_updated_at": 1688821934,
          "text": "ما لون السماء؟"
        }
      ]
    },
    {
      "id": 626967,
      "lesson": 601,
      "type": "T1b",
      "modifiers": 72,
      "wordID": 18168,
      "alternates": [],
      "tokens": [
        {
          "key": "tKeh5UtqtG0",
          "text": "نیلا",
          "raw": {
            "text": "نیلا",
            "location": 6,
            "length": 4
          },
          "prefix": {
            "text": "",
            "location": 6,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 10,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 5,
            "length": 1
          }
        },
        {
          "key": "tlvh48BtA_g",
          "text": "کب",
          "raw": {
            "text": "کب",
            "location": 8,
            "length": 2
          },
          "prefix": {
            "text": "",
            "location": 8,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 10,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 7,
            "length": 1
          }
        },
        {
          "key": "tcIz_Uy7G-x",
          "text": "رکے",
          "raw": {
            "text": "رکے",
            "location": 11,
            "length": 3
          },
          "prefix": {
            "text": "",
            "location": 11,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 14,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 10,
            "length": 1
          }
        },
        {
          "key": "tl_m7-T1R8X",
          "text": "یہ",
          "raw": {
            "text": "یہ",
            "location": 0,
            "length": 2
          },
          "prefix": {
            "text": "",
            "location": 0,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 2,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 0,
            "length": 0
          }
        },
        {
          "key": "tA-Z2DcfJIV",
          "text": "ہے۔",
          "raw": {
            "text": "ہے",
            "location": 11,
            "length": 2
          },
          "prefix": {
            "text": "",
            "location": 11,
            "length": 0
          },
          "suffix": {
            "text": "۔",
            "location": 13,
            "length": 1
          },
          "linker": {
            "text": " ",
            "location": 10,
            "length": 1
          }
        },
        {
          "key": "tVcpBPlzugn",
          "text": "گی؟",
          "raw": {
            "text": "گی",
            "location": 15,
            "length": 2
          },
          "prefix": {
            "text": "",
            "location": 15,
            "length": 0
          },
          "suffix": {
            "text": "؟",
            "location": 17,
            "length": 1
          },
          "linker": {
            "text": " ",
            "location": 14,
            "length": 1
          }
        },
        {
          "key": "tvYjirwZFHx",
          "text": "آسمان",
          "raw": {
            "text": "آسمان",
            "location": 0,
            "length": 5
          },
          "prefix": {
            "text": "",
            "location": 0,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 5,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 0,
            "length": 0
          }
        },
        {
          "key": "taG1TrmSyts",
          "text": "بارش",
          "raw": {
            "text": "بارش",
            "location": 3,
            "length": 4
          },
          "prefix": {
            "text": "",
            "location": 3,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 7,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 2,
            "length": 1
          }
        }
      ],
      "tokensEqualSize": true,
      "ord": [
        "tvYjirwZFHx",
        "tKeh5UtqtG0",
        "tA-Z2DcfJIV"
      ],
      "tokensPhonetic": [
        {
          "key": "tKeh5UtqtG0",
          "text": "neela",
          "raw": {
            "text": "neela",
            "location": 7,
            "length": 5
          },
          "prefix": {
            "text": "",
            "location": 7,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 12,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 6,
            "length": 1
          }
        },
        {
          "key": "tlvh48BtA_g",
          "text": "kab",
          "raw": {
            "text": "kab",
            "location": 11,
            "length": 3
          },
          "prefix": {
            "text": "",
            "location": 11,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 14,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 10,
            "length": 1
          }
        },
        {
          "key": "tcIz_Uy7G-x",
          "text": "rukay",
          "raw": {
            "text": "rukay",
            "location": 15,
            "length": 5
          },
          "prefix": {
            "text": "",
            "location": 15,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 20,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 14,
            "length": 1
          }
        },
        {
          "key": "tl_m7-T1R8X",
          "text": "Yeh",
          "raw": {
            "text": "Yeh",
            "location": 0,
            "length": 3
          },
          "prefix": {
            "text": "",
            "location": 0,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 3,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 0,
            "length": 0
          }
        },
        {
          "key": "tA-Z2DcfJIV",
          "text": "hai.",
          "raw": {
            "text": "hai",
            "location": 13,
            "length": 3
          },
          "prefix": {
            "text": "",
            "location": 13,
            "length": 0
          },
          "suffix": {
            "text": ".",
            "location": 16,
            "length": 1
          },
          "linker": {
            "text": " ",
            "location": 12,
            "length": 1
          }
        },
        {
          "key": "tVcpBPlzugn",
          "text": "gi?",
          "raw": {
            "text": "gi",
            "location": 21,
            "length": 2
          },
          "prefix": {
            "text": "",
            "location": 21,
            "length": 0
          },
          "suffix": {
            "text": "?",
            "location": 23,
            "length": 1
          },
          "linker": {
            "text": " ",
            "location": 20,
            "length": 1
          }
        },
        {
          "key": "tvYjirwZFHx",
          "text": "Aasman",
          "raw": {
            "text": "Aasman",
            "location": 0,
            "length": 6
          },
          "prefix": {
            "text": "",
            "location": 0,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 6,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 0,
            "length": 0
          }
        },
        {
          "key": "taG1TrmSyts",
          "text": "barish",
          "raw": {
            "text": "barish",
            "location": 4,
            "length": 6
          },
          "prefix": {
            "text": "",
            "location": 4,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 10,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 3,
            "length": 1
          }
        }
      ],
      "sols": [
        {
          "key": "srHCcIYkBC2HIZMeg_R54Ru2C09prHcB",
          "audio_updated_at": 1580705393,
          "text": "‫السماء زرقاء.‬",
          "dictionary": [
            {
              "raw": "السماء",
              "translations": [
                {
                  "type": "dictionary",
                  "text": "آسمان",
                  "phonetic": "Aasman"
                }
              ]
            },
            {
              "raw": "زرقاء",
              "translations": [
                {
                  "type": "dictionary",
                  "text": "نیلا",
                  "phonetic": "neela"
                }
              ]
            }
          ],
          "phraseType": 1,
          "text_tokens": [
            {
              "raw": {
                "text": "السماء",
                "location": 1,
                "length": 6
              },
              "prefix": {
                "text": "",
                "location": 1,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 7,
                "length": 0
              },
              "linker": {
                "text": "",
                "location": 1,
                "length": 0
              }
            },
            {
              "raw": {
                "text": "زرقاء",
                "location": 8,
                "length": 5
              },
              "prefix": {
                "text": "",
                "location": 8,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 13,
                "length": 0
              },
              "linker": {
                "text": " ",
                "location": 7,
                "length": 1
              }
            }
          ]
        },
        {
          "key": "srHCcIYkBC2HIZMeg_R54Ru2C09prHcB",
          "audio_updated_at": 1580705393,
          "text": "آسمان نیلا ہے۔",
          "phonetic": "Aasman neela hai."
        }
      ]
    },
    {
      "id": 626968,
      "lesson": 601,
      "type": "Qb",
      "modifiers": 73,
      "wordID": 18057,
      "alternates": [
        18046,
        17991
      ],
      "sols": [
        {
          "key": "LikwbhJVNvi4vFB2APHafKqeykkqShpl",
          "audio_updated_at": 1580692103,
          "text": "شمس",
          "dictionary": [
            {
              "raw": "شمس",
              "translations": [
                {
                  "type": "dictionary",
                  "text": "سورج",
                  "phonetic": "sooraj"
                }
              ]
            }
          ],
          "phraseType": 0,
          "text_tokens": [
            {
              "raw": {
                "text": "شمس",
                "location": 0,
                "length": 3
              },
              "prefix": {
                "text": "",
                "location": 0,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 3,
                "length": 0
              },
              "linker": {
                "text": "",
                "location": 0,
                "length": 0
              }
            }
          ]
        },
        {
          "key": "zYChAELXiijd-hYOhzkaOYcjpHMexbA4",
          "text": "عشب"
        },
        {
          "key": "Y9_ca-MMhkkirnSYf0ETOUmUTWVN6qLP",
          "text": "ثلج"
        }
      ],
      "alts": [
        {
          "key": "LikwbhJVNvi4vFB2APHafKqeykkqShpl",
          "audio_updated_at": 1580692103,
          "text": "سورج",
          "phonetic": "sooraj"
        },
        {
          "key": "zYChAELXiijd-hYOhzkaOYcjpHMexbA4",
          "audio_updated_at": 1580689632,
          "text": "گھاس",
          "phonetic": "ghaas"
        },
        {
          "key": "Y9_ca-MMhkkirnSYf0ETOUmUTWVN6qLP",
          "audio_updated_at": 1593589605,
          "text": "برف",
          "phonetic": "barf"
        }
      ]
    },
    {
      "id": 626969,
      "lesson": 601,
      "type": "Q",
      "modifiers": 41,
      "wordID": 18171,
      "alternates": [
        18168,
        18167
      ],
      "sols": [
        {
          "key": "c028vEWW-8NuewEycNNscwqOeaGf-JoI",
          "audio_updated_at": 1688821936,
          "text": "سورج کا رنگ کیا ہے؟",
          "phonetic": "Sooraj ka rang kya hai?",
          "dictionary": [
            {
              "raw": "سورج",
              "translations": [
                {
                  "type": "dictionary",
                  "text": "الشمس",
                  "phonetic": null
                }
              ]
            },
            {
              "raw": "کا",
              "translations": []
            },
            {
              "raw": "رنگ",
              "translations": [
                {
                  "type": "dictionary",
                  "text": "لون",
                  "phonetic": null
                }
              ]
            },
            {
              "raw": "کیا",
              "translations": [
                {
                  "type": "verb",
                  "name": {
                    "t": "اعتراض کرنا",
                    "m": "يجادل",
                    "phonetic": "aitraz karna"
                  },
                  "id": 3,
                  "tenseNames": {
                    "pr": "الحاضر",
                    "pa": "ماضي",
                    "fu": "مستقبل"
                  },
                  "conj": {
                    "pr": [
                      {
                        "t": {
                          "key": "NbVQRNn_ONTnX_KzQwYj_EI2UEiOi1n_",
                          "text": "میں اعتراض کرتا ہوں",
                          "phonetic": "Mein aitraz karta hoon",
                          "audio_updated_at": 1580693005
                        },
                        "m": {
                          "text": "أنا أجادل"
                        }
                      },
                      {
                        "t": {
                          "key": "qCyWDlCHwfErksUEAP_yrsXYB-7O5qah",
                          "text": "تم اعتراض کرتے ہو",
                          "phonetic": "Tum aitraz kartay ho",
                          "audio_updated_at": 1580693007
                        },
                        "m": {
                          "text": "أنت تجادل"
                        }
                      },
                      {
                        "t": {
                          "key": "ILMaHZbn7wtGOmfLqiyzGS3tFAb1WZGq",
                          "text": "وہ اعتراض کرتا ہے",
                          "phonetic": "Wo aitraz karta hai",
                          "audio_updated_at": 1580693009
                        },
                        "m": {
                          "text": "هو يجادل"
                        }
                      },
                      {
                        "t": {
                          "key": "0034Zt-Aq1p6E0OOC-aCVE-cv84klfhF",
                          "text": "وہ اعتراض کرتی ہے",
                          "phonetic": "Wo aitraz karti hai",
                          "audio_updated_at": 1580693010
                        },
                        "m": {
                          "text": "هي تجادل"
                        }
                      },
                      {
                        "t": {
                          "key": "7JFKq35f4sfmNrtV8ztizKfY0EgwA4K2",
                          "text": "ہم اعتراض کرتے ہیں",
                          "phonetic": "Hum aitraz kartay hain",
                          "audio_updated_at": 1580693014
                        },
                        "m": {
                          "text": "نحن نجادل"
                        }
                      },
                      {
                        "t": {
                          "key": "s0T-VSgsJit3qB2AOL9Xw99Tld13LO2j",
                          "text": "آپ اعتراض کرتے ہیں",
                          "phonetic": "Aap aitraz kartay hain",
                          "audio_updated_at": 1580693016
                        },
                        "m": {
                          "text": "أنتم تجادلون"
                        }
                      },
                      {
                        "t": {
                          "key": "C8J8CSypyAz99l66aPLMGrGMK-DX9iea",
                          "text": "وہ اعتراض کرتے ہیں",
                          "phonetic": "Wo aitraz kartay hain",
                          "audio_updated_at": 1580693017
                        },
                        "m": {
                          "text": "هم يجادلون"
                        }
                      }
                    ],
                    "pa": [
                      {
                        "t": {
                          "key": "12vfaq_pqoMqBMDkQy1gvz9wpvcoKD4O",
                          "text": "میں نے اعتراض کیا",
                          "phonetic": "Mein ne aitraz kiya",
                          "audio_updated_at": 1580693019
                        },
                        "m": {
                          "text": "أنا جادلت"
                        }
                      },
                      {
                        "t": {
                          "key": "qJQsFj1joTg9gvSm2rLXSNfRv2se2kNT",
                          "text": "تم نے اعتراض کیا",
                          "phonetic": "Tum ne aitraz kiya",
                          "audio_updated_at": 1580693021
                        },
                        "m": {
                          "text": "أنت جادلت"
                        }
                      },
                      {
                        "t": {
                          "key": "rZgcahFxzLiFSNe4JHj1FsFSOJpOnSQT",
                          "text": "اس نے اعتراض کیا",
                          "phonetic": "Us ne aitraz kiya",
                          "audio_updated_at": 1580693022
                        },
                        "m": {
                          "text": "هو جادل"
                        }
                      },
                      {
                        "t": {
                          "key": "g31hadC7nwexcIkhvIDRV9gFO0accDdb",
                          "text": "اس نے اعتراض کیا",
                          "phonetic": "Us ne aitraz kiya",
                          "audio_updated_at": 1580693024
                        },
                        "m": {
                          "text": "هي جادلت"
                        }
                      },
                      {
                        "t": {
                          "key": "kaZS0jQA-8fa6J2aw-6TmD0KIUhJXmlV",
                          "text": "ہم نے اعتراض کیا",
                          "phonetic": "Hum ne aitraz kiya",
                          "audio_updated_at": 1580693027
                        },
                        "m": {
                          "text": "نحن جادلنا"
                        }
                      },
                      {
                        "t": {
                          "key": "PgMtOMPuC52J9xsOP55jXqbIGD4eyJn6",
                          "text": "آپ نے اعتراض کیا",
                          "phonetic": "Aap ne aitraz kiya",
                          "audio_updated_at": 1580693029
                        },
                        "m": {
                          "text": "أنتم جادلتم"
                        }
                      },
                      {
                        "t": {
                          "key": "LY2Cu1ar968fdpxumU9vqGgAorVbvCQi",
                          "text": "انہوں نے اعتراض کیا",
                          "phonetic": "Unhon ne aitraz kiya",
                          "audio_updated_at": 1580693031
                        },
                        "m": {
                          "text": "هم جادلوا"
                        }
                      }
                    ],
                    "fu": [
                      {
                        "t": {
                          "key": "LYXMlh2Q_gueALQxCKTP_n_SGuUP_apB",
                          "text": "میں اعتراض کروں گا",
                          "phonetic": "Mein aitraz karoon ga",
                          "audio_updated_at": 1580693033
                        },
                        "m": {
                          "text": "أنا سأجادل"
                        }
                      },
                      {
                        "t": {
                          "key": "qxeq4L0aiz1s42qwj5RiJpEcJqzaYEF6",
                          "text": "تم اعتراض کرو گے",
                          "phonetic": "Tum aitraz karo gay",
                          "audio_updated_at": 1580693034
                        },
                        "m": {
                          "text": "أنت ستجادل"
                        }
                      },
                      {
                        "t": {
                          "key": "BZW_R_ybeGO6CKFD9o6d75dFfLaYncTA",
                          "text": "وہ اعتراض کرے گا",
                          "phonetic": "Wo aitraz karay ga",
                          "audio_updated_at": 1580693036
                        },
                        "m": {
                          "text": "هو سيجادل"
                        }
                      },
                      {
                        "t": {
                          "key": "a5BjGeBRNJQZV7QXqCQE6JEoDLaJsPVR",
                          "text": "وہ اعتراض کرے گی",
                          "phonetic": "Wo aitraz karay gi",
                          "audio_updated_at": 1580693038
                        },
                        "m": {
                          "text": "هي ستجادل"
                        }
                      },
                      {
                        "t": {
                          "key": "BTm6gCsxrNIevC8inUYk8O97_Zlc7gk_",
                          "text": "ہم اعتراض کریں گے",
                          "phonetic": "Hum aitraz karain gay",
                          "audio_updated_at": 1580693041
                        },
                        "m": {
                          "text": "نحن سنجادل"
                        }
                      },
                      {
                        "t": {
                          "key": "hSZNzAxa80aaxMtEAlebaAZQZZQVMlAi",
                          "text": "آپ اعتراض کریں گے",
                          "phonetic": "Aap aitraz karain gay",
                          "audio_updated_at": 1580693043
                        },
                        "m": {
                          "text": "أنتم ستجادلون"
                        }
                      },
                      {
                        "t": {
                          "key": "VPcwX-Od7zN1ygjXDuz-RXKU41u_uT4H",
                          "text": "وہ اعتراض کریں گے",
                          "phonetic": "Wo aitraz karain gay",
                          "audio_updated_at": 1580693045
                        },
                        "m": {
                          "text": "هم سيجادلون"
                        }
                      }
                    ]
                  }
                }
              ]
            },
            {
              "raw": "ہے",
              "translations": [
                {
                  "type": "verb",
                  "name": {
                    "t": "متّفق ہونا",
                    "m": "يوافق",
                    "phonetic": "muttafiq hona"
                  },
                  "id": 1,
                  "tenseNames": {
                    "pr": "الحاضر",
                    "pa": "ماضي",
                    "fu": "مستقبل"
                  },
                  "conj": {
                    "pr": [
                      {
                        "t": {
                          "key": "ILulDenvPwHSmrUhzuSBdXwvJ-QjKoyp",
                          "text": "میں متّفق ہوتا ہوں",
                          "phonetic": "Mein muttafiq hota hoon",
                          "audio_updated_at": 1580692919
                        },
                        "m": {
                          "text": "أنا أوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "tRwjOBCOhXT8RbfFan5KJLMBmu6fw-2b",
                          "text": "تم متّفق ہوتے ہو",
                          "phonetic": "Tum muttafiq hotay ho",
                          "audio_updated_at": 1580692921
                        },
                        "m": {
                          "text": "أنت توافق"
                        }
                      },
                      {
                        "t": {
                          "key": "v1Y_DdoUpq2lF8amygECA1hyoxaXV-gL",
                          "text": "وہ متّفق ہوتا ہے",
                          "phonetic": "Wo muttafiq hota hai",
                          "audio_updated_at": 1580692923
                        },
                        "m": {
                          "text": "هو يوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "hXk3UMfDAMi5Nq-Dwy0aSGqR7wUM36CA",
                          "text": "وہ متّفق ہوتی ہے",
                          "phonetic": "Wo muttafiq hoti hai",
                          "audio_updated_at": 1580692925
                        },
                        "m": {
                          "text": "هي توافق"
                        }
                      },
                      {
                        "t": {
                          "key": "Z-7SYfgQPo46ZkGsGcRL7FtMn4JjbMi3",
                          "text": "ہم متّفق ہوتے ہیں",
                          "phonetic": "Hum muttafiq hotay hain",
                          "audio_updated_at": 1580692929
                        },
                        "m": {
                          "text": "نحن نوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "YHPOGPQLWeWIL2wzkaadaCzDyOklpbtw",
                          "text": "آپ متّفق ہوتے ہیں",
                          "phonetic": "Aap muttafiq hotay hain",
                          "audio_updated_at": 1580692931
                        },
                        "m": {
                          "text": "أنتم توافقون"
                        }
                      },
                      {
                        "t": {
                          "key": "XstYItwshUedYqu8yaE-eb1JS0dNY_3V",
                          "text": "وہ متّفق ہوتے ہیں",
                          "phonetic": "Wo muttafiq hotay hain",
                          "audio_updated_at": 1580692932
                        },
                        "m": {
                          "text": "هم يوافقون"
                        }
                      }
                    ],
                    "pa": [
                      {
                        "t": {
                          "key": "JYIRRloDnLNan4PYnn6hjcvhMcet0WD1",
                          "text": "میں متّفق ہوا",
                          "phonetic": "Mein muttafiq hua",
                          "audio_updated_at": 1580692934
                        },
                        "m": {
                          "text": "أنا وافقت"
                        }
                      },
                      {
                        "t": {
                          "key": "b89-0T_2GdO9ZWYX6oHtePfHFvl7aGaB",
                          "text": "تم متّفق ہوئے",
                          "phonetic": "Tum muttafiq huay",
                          "audio_updated_at": 1580692936
                        },
                        "m": {
                          "text": "أنت وافقت"
                        }
                      },
                      {
                        "t": {
                          "key": "5Kesu04ngj6TrurmE3DoV24c2DgiRuPi",
                          "text": "وہ متّفق ہوا",
                          "phonetic": "Wo muttafiq hua",
                          "audio_updated_at": 1580692938
                        },
                        "m": {
                          "text": "هو وافق"
                        }
                      },
                      {
                        "t": {
                          "key": "bJnTTyXZzvvQnFBqzhVFtYdjePdGS8Nt",
                          "text": "وہ متّفق ہوئی",
                          "phonetic": "Wo muttafiq hui",
                          "audio_updated_at": 1580692939
                        },
                        "m": {
                          "text": "هي وافقت"
                        }
                      },
                      {
                        "t": {
                          "key": "6jbKTg-yy4CpgadT7AGIlL73edwHln5R",
                          "text": "ہم متّفق ہوئے",
                          "phonetic": "Hum muttafiq huay",
                          "audio_updated_at": 1580692943
                        },
                        "m": {
                          "text": "نحن وافقنا"
                        }
                      },
                      {
                        "t": {
                          "key": "Q4O8uGGY0Yz1Runhm2z3jIrtwe4agkSW",
                          "text": "آپ متّفق ہوئے",
                          "phonetic": "Aap muttafiq huay",
                          "audio_updated_at": 1580692945
                        },
                        "m": {
                          "text": "أنتم وافقتم"
                        }
                      },
                      {
                        "t": {
                          "key": "zDR_uqvyzA2xaP4vPmCaHNC6uvkXoLCN",
                          "text": "وہ متّفق ہوئے",
                          "phonetic": "Wo muttafiq huay",
                          "audio_updated_at": 1580692946
                        },
                        "m": {
                          "text": "هم وافقوا"
                        }
                      }
                    ],
                    "fu": [
                      {
                        "t": {
                          "key": "j6UK9u9ekeOG_VU6w29oNUVI1n-td3qj",
                          "text": "میں متّفق ہوں گا",
                          "phonetic": "Mein muttafiq hoon ga",
                          "audio_updated_at": 1580692948
                        },
                        "m": {
                          "text": "أنا سأوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "oZFt-tLlXNmJnfcC-ZIxitkWJjZsR4DF",
                          "text": "تم متّفق ہو گے",
                          "phonetic": "Tum muttafiq ho gay",
                          "audio_updated_at": 1580692950
                        },
                        "m": {
                          "text": "أنت ستوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "f2yewJfPLzDgQBRrXgu_bSesRq5s3WZt",
                          "text": "وہ متّفق ہوگا",
                          "phonetic": "Wo muttafiq ho ga",
                          "audio_updated_at": 1580692952
                        },
                        "m": {
                          "text": "هو سيوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "POlQ-7Y26Fy6JIDgWRrGgyrosRQvgJf4",
                          "text": "وہ متّفق ہو گی",
                          "phonetic": "Wo muttafiq ho gi",
                          "audio_updated_at": 1580692954
                        },
                        "m": {
                          "text": "هي ستوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "2nh6PEhVjxPVdsWh42jrcdntSDcy7Stp",
                          "text": "ہم متّفق ہوں گے",
                          "phonetic": "Hum muttafiq hon gay",
                          "audio_updated_at": 1580692958
                        },
                        "m": {
                          "text": "نحن سنوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "_TThGfBkwBU1nh9vEXcVXqLAmJKoZ8AG",
                          "text": "آپ متّفق ہوں گے",
                          "phonetic": "Aap muttafiq hon gay",
                          "audio_updated_at": 1580692960
                        },
                        "m": {
                          "text": "أنتم ستوافقون"
                        }
                      },
                      {
                        "t": {
                          "key": "Nl3attkofIOZbIBetJNNRmJIThUIiO3O",
                          "text": "وہ متّفق ہوں گے",
                          "phonetic": "Wo muttafiq hon gay",
                          "audio_updated_at": 1580692962
                        },
                        "m": {
                          "text": "هم سيوافقون"
                        }
                      }
                    ]
                  }
                }
              ]
            }
          ],
          "phraseType": 1,
          "text_tokens": [
            {
              "raw": {
                "text": "سورج",
                "location": 0,
                "length": 4
              },
              "prefix": {
                "text": "",
                "location": 0,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 4,
                "length": 0
              },
              "linker": {
                "text": "",
                "location": 0,
                "length": 0
              }
            },
            {
              "raw": {
                "text": "کا",
                "location": 5,
                "length": 2
              },
              "prefix": {
                "text": "",
                "location": 5,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 7,
                "length": 0
              },
              "linker": {
                "text": " ",
                "location": 4,
                "length": 1
              }
            },
            {
              "raw": {
                "text": "رنگ",
                "location": 8,
                "length": 3
              },
              "prefix": {
                "text": "",
                "location": 8,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 11,
                "length": 0
              },
              "linker": {
                "text": " ",
                "location": 7,
                "length": 1
              }
            },
            {
              "raw": {
                "text": "کیا",
                "location": 12,
                "length": 3
              },
              "prefix": {
                "text": "",
                "location": 12,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 15,
                "length": 0
              },
              "linker": {
                "text": " ",
                "location": 11,
                "length": 1
              }
            },
            {
              "raw": {
                "text": "ہے",
                "location": 16,
                "length": 2
              },
              "prefix": {
                "text": "",
                "location": 16,
                "length": 0
              },
              "suffix": {
                "text": "؟",
                "location": 18,
                "length": 1
              },
              "linker": {
                "text": " ",
                "location": 15,
                "length": 1
              }
            }
          ],
          "phonetic_tokens": [
            {
              "raw": {
                "text": "Sooraj",
                "location": 0,
                "length": 6
              },
              "prefix": {
                "text": "",
                "location": 0,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 6,
                "length": 0
              },
              "linker": {
                "text": "",
                "location": 0,
                "length": 0
              }
            },
            {
              "raw": {
                "text": "ka",
                "location": 7,
                "length": 2
              },
              "prefix": {
                "text": "",
                "location": 7,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 9,
                "length": 0
              },
              "linker": {
                "text": " ",
                "location": 6,
                "length": 1
              }
            },
            {
              "raw": {
                "text": "rang",
                "location": 10,
                "length": 4
              },
              "prefix": {
                "text": "",
                "location": 10,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 14,
                "length": 0
              },
              "linker": {
                "text": " ",
                "location": 9,
                "length": 1
              }
            },
            {
              "raw": {
                "text": "kya",
                "location": 15,
                "length": 3
              },
              "prefix": {
                "text": "",
                "location": 15,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 18,
                "length": 0
              },
              "linker": {
                "text": " ",
                "location": 14,
                "length": 1
              }
            },
            {
              "raw": {
                "text": "hai",
                "location": 19,
                "length": 3
              },
              "prefix": {
                "text": "",
                "location": 19,
                "length": 0
              },
              "suffix": {
                "text": "?",
                "location": 22,
                "length": 1
              },
              "linker": {
                "text": " ",
                "location": 18,
                "length": 1
              }
            }
          ]
        },
        {
          "key": "Mru5AvwhaT0CF7MOV5zN4pnbOgyUas7G",
          "text": "آسمان کا رنگ کیا ہے؟",
          "phonetic": "Aasman ka rang kya hai?"
        },
        {
          "key": "srHCcIYkBC2HIZMeg_R54Ru2C09prHcB",
          "text": "آسمان نیلا ہے۔",
          "phonetic": "Aasman neela hai."
        }
      ],
      "alts": [
        {
          "key": "c028vEWW-8NuewEycNNscwqOeaGf-JoI",
          "audio_updated_at": 1688821936,
          "text": "ما لون الشمس؟"
        },
        {
          "key": "Mru5AvwhaT0CF7MOV5zN4pnbOgyUas7G",
          "audio_updated_at": 1688821934,
          "text": "ما لون السماء؟"
        },
        {
          "key": "srHCcIYkBC2HIZMeg_R54Ru2C09prHcB",
          "audio_updated_at": 1580705393,
          "text": "‫السماء زرقاء.‬"
        }
      ]
    },
    {
      "id": 626970,
      "lesson": 601,
      "type": "T1b",
      "modifiers": 72,
      "wordID": 18172,
      "alternates": [],
      "tokens": [
        {
          "key": "twVdV-8HZpZ",
          "text": "ہے۔",
          "raw": {
            "text": "ہے",
            "location": 10,
            "length": 2
          },
          "prefix": {
            "text": "",
            "location": 10,
            "length": 0
          },
          "suffix": {
            "text": "۔",
            "location": 12,
            "length": 1
          },
          "linker": {
            "text": " ",
            "location": 9,
            "length": 1
          }
        },
        {
          "key": "t6IsJBNeph_",
          "text": "کہاں",
          "raw": {
            "text": "کہاں",
            "location": 6,
            "length": 4
          },
          "prefix": {
            "text": "",
            "location": 6,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 10,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 5,
            "length": 1
          }
        },
        {
          "key": "tkgp95jUzG_",
          "text": "سورج",
          "raw": {
            "text": "سورج",
            "location": 0,
            "length": 4
          },
          "prefix": {
            "text": "",
            "location": 0,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 4,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 0,
            "length": 0
          }
        },
        {
          "key": "tN1W5j2RMY0",
          "text": "ہاتھی",
          "raw": {
            "text": "ہاتھی",
            "location": 0,
            "length": 5
          },
          "prefix": {
            "text": "",
            "location": 0,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 5,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 0,
            "length": 0
          }
        },
        {
          "key": "tLN0NBaPVJZ",
          "text": "پیلا",
          "raw": {
            "text": "پیلا",
            "location": 5,
            "length": 4
          },
          "prefix": {
            "text": "",
            "location": 5,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 9,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 4,
            "length": 1
          }
        },
        {
          "key": "tGbAwhJiGn4",
          "text": "ہیں؟",
          "raw": {
            "text": "ہیں",
            "location": 11,
            "length": 3
          },
          "prefix": {
            "text": "",
            "location": 11,
            "length": 0
          },
          "suffix": {
            "text": "؟",
            "location": 14,
            "length": 1
          },
          "linker": {
            "text": " ",
            "location": 10,
            "length": 1
          }
        }
      ],
      "tokensEqualSize": true,
      "ord": [
        "tkgp95jUzG_",
        "tLN0NBaPVJZ",
        "twVdV-8HZpZ"
      ],
      "tokensPhonetic": [
        {
          "key": "twVdV-8HZpZ",
          "text": "hai.",
          "raw": {
            "text": "hai",
            "location": 13,
            "length": 3
          },
          "prefix": {
            "text": "",
            "location": 13,
            "length": 0
          },
          "suffix": {
            "text": ".",
            "location": 16,
            "length": 1
          },
          "linker": {
            "text": " ",
            "location": 12,
            "length": 1
          }
        },
        {
          "key": "t6IsJBNeph_",
          "text": "kahan",
          "raw": {
            "text": "kahan",
            "location": 6,
            "length": 5
          },
          "prefix": {
            "text": "",
            "location": 6,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 11,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 5,
            "length": 1
          }
        },
        {
          "key": "tkgp95jUzG_",
          "text": "Sooraj",
          "raw": {
            "text": "Sooraj",
            "location": 0,
            "length": 6
          },
          "prefix": {
            "text": "",
            "location": 0,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 6,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 0,
            "length": 0
          }
        },
        {
          "key": "tN1W5j2RMY0",
          "text": "Hathi",
          "raw": {
            "text": "Hathi",
            "location": 0,
            "length": 5
          },
          "prefix": {
            "text": "",
            "location": 0,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 5,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 0,
            "length": 0
          }
        },
        {
          "key": "tLN0NBaPVJZ",
          "text": "peela",
          "raw": {
            "text": "peela",
            "location": 7,
            "length": 5
          },
          "prefix": {
            "text": "",
            "location": 7,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 12,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 6,
            "length": 1
          }
        },
        {
          "key": "tGbAwhJiGn4",
          "text": "hain?",
          "raw": {
            "text": "hain",
            "location": 12,
            "length": 4
          },
          "prefix": {
            "text": "",
            "location": 12,
            "length": 0
          },
          "suffix": {
            "text": "?",
            "location": 16,
            "length": 1
          },
          "linker": {
            "text": " ",
            "location": 11,
            "length": 1
          }
        }
      ],
      "sols": [
        {
          "key": "0wZRF17w6KxeTqX4TKqs04aK0sMghXSC",
          "audio_updated_at": 1580705388,
          "text": "الشمس صفراء.",
          "dictionary": [
            {
              "raw": "الشمس",
              "translations": [
                {
                  "type": "dictionary",
                  "text": "سورج",
                  "phonetic": "sooraj"
                }
              ]
            },
            {
              "raw": "صفراء",
              "translations": [
                {
                  "type": "dictionary",
                  "text": "پیلا",
                  "phonetic": "peela"
                }
              ]
            }
          ],
          "phraseType": 1,
          "text_tokens": [
            {
              "raw": {
                "text": "الشمس",
                "location": 0,
                "length": 5
              },
              "prefix": {
                "text": "",
                "location": 0,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 5,
                "length": 0
              },
              "linker": {
                "text": "",
                "location": 0,
                "length": 0
              }
            },
            {
              "raw": {
                "text": "صفراء",
                "location": 6,
                "length": 5
              },
              "prefix": {
                "text": "",
                "location": 6,
                "length": 0
              },
              "suffix": {
                "text": ".",
                "location": 11,
                "length": 1
              },
              "linker": {
                "text": " ",
                "location": 5,
                "length": 1
              }
            }
          ]
        },
        {
          "key": "0wZRF17w6KxeTqX4TKqs04aK0sMghXSC",
          "audio_updated_at": 1580705388,
          "text": "سورج پیلا ہے۔",
          "phonetic": "Sooraj peela hai."
        }
      ]
    },
    {
      "id": 626971,
      "lesson": 601,
      "type": "R",
      "modifiers": 636,
      "wordID": 18162,
      "alternates": [],
      "tokens": [
        {
          "key": "tKfCjU4xaK2",
          "text": "أبيض",
          "raw": {
            "text": "أبيض",
            "location": 7,
            "length": 4
          },
          "prefix": {
            "text": "",
            "location": 7,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 11,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 6,
            "length": 1
          }
        },
        {
          "key": "t6hFEezqsIw",
          "text": "أخضر",
          "raw": {
            "text": "أخضر",
            "location": 7,
            "length": 4
          },
          "prefix": {
            "text": "",
            "location": 7,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 11,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 6,
            "length": 1
          }
        },
        {
          "key": "tHN6pPLB8gq",
          "text": "الثلج",
          "raw": {
            "text": "الثلج",
            "location": 1,
            "length": 5
          },
          "prefix": {
            "text": "",
            "location": 1,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 6,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 1,
            "length": 0
          }
        },
        {
          "key": "tr3CJb16fdF",
          "text": "العشب",
          "raw": {
            "text": "العشب",
            "location": 1,
            "length": 5
          },
          "prefix": {
            "text": "",
            "location": 1,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 6,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 1,
            "length": 0
          }
        }
      ],
      "tokensEqualSize": true,
      "ord": [
        "tr3CJb16fdF",
        "t6hFEezqsIw"
      ],
      "sols": [
        {
          "key": "RizXNkKlwJqTepMBamclhV9hH4h8vKGX",
          "audio_updated_at": 1580705395,
          "text": "گھاس سبز ہے۔",
          "phonetic": "Ghaas sabz hai.",
          "dictionary": [
            {
              "raw": "گھاس",
              "translations": []
            },
            {
              "raw": "سبز",
              "translations": [
                {
                  "type": "dictionary",
                  "text": "أخضر",
                  "phonetic": null
                }
              ]
            },
            {
              "raw": "ہے",
              "translations": [
                {
                  "type": "verb",
                  "name": {
                    "t": "متّفق ہونا",
                    "m": "يوافق",
                    "phonetic": "muttafiq hona"
                  },
                  "id": 1,
                  "tenseNames": {
                    "pr": "الحاضر",
                    "pa": "ماضي",
                    "fu": "مستقبل"
                  },
                  "conj": {
                    "pr": [
                      {
                        "t": {
                          "key": "ILulDenvPwHSmrUhzuSBdXwvJ-QjKoyp",
                          "text": "میں متّفق ہوتا ہوں",
                          "phonetic": "Mein muttafiq hota hoon",
                          "audio_updated_at": 1580692919
                        },
                        "m": {
                          "text": "أنا أوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "tRwjOBCOhXT8RbfFan5KJLMBmu6fw-2b",
                          "text": "تم متّفق ہوتے ہو",
                          "phonetic": "Tum muttafiq hotay ho",
                          "audio_updated_at": 1580692921
                        },
                        "m": {
                          "text": "أنت توافق"
                        }
                      },
                      {
                        "t": {
                          "key": "v1Y_DdoUpq2lF8amygECA1hyoxaXV-gL",
                          "text": "وہ متّفق ہوتا ہے",
                          "phonetic": "Wo muttafiq hota hai",
                          "audio_updated_at": 1580692923
                        },
                        "m": {
                          "text": "هو يوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "hXk3UMfDAMi5Nq-Dwy0aSGqR7wUM36CA",
                          "text": "وہ متّفق ہوتی ہے",
                          "phonetic": "Wo muttafiq hoti hai",
                          "audio_updated_at": 1580692925
                        },
                        "m": {
                          "text": "هي توافق"
                        }
                      },
                      {
                        "t": {
                          "key": "Z-7SYfgQPo46ZkGsGcRL7FtMn4JjbMi3",
                          "text": "ہم متّفق ہوتے ہیں",
                          "phonetic": "Hum muttafiq hotay hain",
                          "audio_updated_at": 1580692929
                        },
                        "m": {
                          "text": "نحن نوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "YHPOGPQLWeWIL2wzkaadaCzDyOklpbtw",
                          "text": "آپ متّفق ہوتے ہیں",
                          "phonetic": "Aap muttafiq hotay hain",
                          "audio_updated_at": 1580692931
                        },
                        "m": {
                          "text": "أنتم توافقون"
                        }
                      },
                      {
                        "t": {
                          "key": "XstYItwshUedYqu8yaE-eb1JS0dNY_3V",
                          "text": "وہ متّفق ہوتے ہیں",
                          "phonetic": "Wo muttafiq hotay hain",
                          "audio_updated_at": 1580692932
                        },
                        "m": {
                          "text": "هم يوافقون"
                        }
                      }
                    ],
                    "pa": [
                      {
                        "t": {
                          "key": "JYIRRloDnLNan4PYnn6hjcvhMcet0WD1",
                          "text": "میں متّفق ہوا",
                          "phonetic": "Mein muttafiq hua",
                          "audio_updated_at": 1580692934
                        },
                        "m": {
                          "text": "أنا وافقت"
                        }
                      },
                      {
                        "t": {
                          "key": "b89-0T_2GdO9ZWYX6oHtePfHFvl7aGaB",
                          "text": "تم متّفق ہوئے",
                          "phonetic": "Tum muttafiq huay",
                          "audio_updated_at": 1580692936
                        },
                        "m": {
                          "text": "أنت وافقت"
                        }
                      },
                      {
                        "t": {
                          "key": "5Kesu04ngj6TrurmE3DoV24c2DgiRuPi",
                          "text": "وہ متّفق ہوا",
                          "phonetic": "Wo muttafiq hua",
                          "audio_updated_at": 1580692938
                        },
                        "m": {
                          "text": "هو وافق"
                        }
                      },
                      {
                        "t": {
                          "key": "bJnTTyXZzvvQnFBqzhVFtYdjePdGS8Nt",
                          "text": "وہ متّفق ہوئی",
                          "phonetic": "Wo muttafiq hui",
                          "audio_updated_at": 1580692939
                        },
                        "m": {
                          "text": "هي وافقت"
                        }
                      },
                      {
                        "t": {
                          "key": "6jbKTg-yy4CpgadT7AGIlL73edwHln5R",
                          "text": "ہم متّفق ہوئے",
                          "phonetic": "Hum muttafiq huay",
                          "audio_updated_at": 1580692943
                        },
                        "m": {
                          "text": "نحن وافقنا"
                        }
                      },
                      {
                        "t": {
                          "key": "Q4O8uGGY0Yz1Runhm2z3jIrtwe4agkSW",
                          "text": "آپ متّفق ہوئے",
                          "phonetic": "Aap muttafiq huay",
                          "audio_updated_at": 1580692945
                        },
                        "m": {
                          "text": "أنتم وافقتم"
                        }
                      },
                      {
                        "t": {
                          "key": "zDR_uqvyzA2xaP4vPmCaHNC6uvkXoLCN",
                          "text": "وہ متّفق ہوئے",
                          "phonetic": "Wo muttafiq huay",
                          "audio_updated_at": 1580692946
                        },
                        "m": {
                          "text": "هم وافقوا"
                        }
                      }
                    ],
                    "fu": [
                      {
                        "t": {
                          "key": "j6UK9u9ekeOG_VU6w29oNUVI1n-td3qj",
                          "text": "میں متّفق ہوں گا",
                          "phonetic": "Mein muttafiq hoon ga",
                          "audio_updated_at": 1580692948
                        },
                        "m": {
                          "text": "أنا سأوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "oZFt-tLlXNmJnfcC-ZIxitkWJjZsR4DF",
                          "text": "تم متّفق ہو گے",
                          "phonetic": "Tum muttafiq ho gay",
                          "audio_updated_at": 1580692950
                        },
                        "m": {
                          "text": "أنت ستوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "f2yewJfPLzDgQBRrXgu_bSesRq5s3WZt",
                          "text": "وہ متّفق ہوگا",
                          "phonetic": "Wo muttafiq ho ga",
                          "audio_updated_at": 1580692952
                        },
                        "m": {
                          "text": "هو سيوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "POlQ-7Y26Fy6JIDgWRrGgyrosRQvgJf4",
                          "text": "وہ متّفق ہو گی",
                          "phonetic": "Wo muttafiq ho gi",
                          "audio_updated_at": 1580692954
                        },
                        "m": {
                          "text": "هي ستوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "2nh6PEhVjxPVdsWh42jrcdntSDcy7Stp",
                          "text": "ہم متّفق ہوں گے",
                          "phonetic": "Hum muttafiq hon gay",
                          "audio_updated_at": 1580692958
                        },
                        "m": {
                          "text": "نحن سنوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "_TThGfBkwBU1nh9vEXcVXqLAmJKoZ8AG",
                          "text": "آپ متّفق ہوں گے",
                          "phonetic": "Aap muttafiq hon gay",
                          "audio_updated_at": 1580692960
                        },
                        "m": {
                          "text": "أنتم ستوافقون"
                        }
                      },
                      {
                        "t": {
                          "key": "Nl3attkofIOZbIBetJNNRmJIThUIiO3O",
                          "text": "وہ متّفق ہوں گے",
                          "phonetic": "Wo muttafiq hon gay",
                          "audio_updated_at": 1580692962
                        },
                        "m": {
                          "text": "هم سيوافقون"
                        }
                      }
                    ]
                  }
                }
              ]
            }
          ],
          "phraseType": 1,
          "text_tokens": [
            {
              "raw": {
                "text": "گھاس",
                "location": 0,
                "length": 4
              },
              "prefix": {
                "text": "",
                "location": 0,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 4,
                "length": 0
              },
              "linker": {
                "text": "",
                "location": 0,
                "length": 0
              }
            },
            {
              "raw": {
                "text": "سبز",
                "location": 5,
                "length": 3
              },
              "prefix": {
                "text": "",
                "location": 5,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 8,
                "length": 0
              },
              "linker": {
                "text": " ",
                "location": 4,
                "length": 1
              }
            },
            {
              "raw": {
                "text": "ہے",
                "location": 9,
                "length": 2
              },
              "prefix": {
                "text": "",
                "location": 9,
                "length": 0
              },
              "suffix": {
                "text": "۔",
                "location": 11,
                "length": 1
              },
              "linker": {
                "text": " ",
                "location": 8,
                "length": 1
              }
            }
          ],
          "phonetic_tokens": [
            {
              "raw": {
                "text": "Ghaas",
                "location": 0,
                "length": 5
              },
              "prefix": {
                "text": "",
                "location": 0,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 5,
                "length": 0
              },
              "linker": {
                "text": "",
                "location": 0,
                "length": 0
              }
            },
            {
              "raw": {
                "text": "sabz",
                "location": 6,
                "length": 4
              },
              "prefix": {
                "text": "",
                "location": 6,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 10,
                "length": 0
              },
              "linker": {
                "text": " ",
                "location": 5,
                "length": 1
              }
            },
            {
              "raw": {
                "text": "hai",
                "location": 11,
                "length": 3
              },
              "prefix": {
                "text": "",
                "location": 11,
                "length": 0
              },
              "suffix": {
                "text": ".",
                "location": 14,
                "length": 1
              },
              "linker": {
                "text": " ",
                "location": 10,
                "length": 1
              }
            }
          ]
        },
        {
          "key": "RizXNkKlwJqTepMBamclhV9hH4h8vKGX",
          "audio_updated_at": 1580705395,
          "text": "‫العشب أخضر.‬"
        }
      ],
      "quizSkipData": {
        "type": "T1",
        "modifiers": 40,
        "tokens": [
          {
            "key": "tTqibff7-zW",
            "text": "لون",
            "raw": {
              "text": "لون",
              "location": 3,
              "length": 3
            },
            "prefix": {
              "text": "",
              "location": 3,
              "length": 0
            },
            "suffix": {
              "text": "",
              "location": 6,
              "length": 0
            },
            "linker": {
              "text": " ",
              "location": 2,
              "length": 1
            }
          },
          {
            "key": "tmSTbMP8s2y",
            "text": "العشب",
            "raw": {
              "text": "العشب",
              "location": 1,
              "length": 5
            },
            "prefix": {
              "text": "",
              "location": 1,
              "length": 0
            },
            "suffix": {
              "text": "",
              "location": 6,
              "length": 0
            },
            "linker": {
              "text": "",
              "location": 1,
              "length": 0
            }
          },
          {
            "key": "tYob186_UgP",
            "text": "الثلج؟",
            "raw": {
              "text": "الثلج",
              "location": 7,
              "length": 5
            },
            "prefix": {
              "text": "",
              "location": 7,
              "length": 0
            },
            "suffix": {
              "text": "؟",
              "location": 12,
              "length": 1
            },
            "linker": {
              "text": " ",
              "location": 6,
              "length": 1
            }
          },
          {
            "key": "tG4KXjpphVs",
            "text": "أخضر",
            "raw": {
              "text": "أخضر",
              "location": 7,
              "length": 4
            },
            "prefix": {
              "text": "",
              "location": 7,
              "length": 0
            },
            "suffix": {
              "text": "",
              "location": 11,
              "length": 0
            },
            "linker": {
              "text": " ",
              "location": 6,
              "length": 1
            }
          },
          {
            "key": "t153QqoTPdB",
            "text": "ما",
            "raw": {
              "text": "ما",
              "location": 0,
              "length": 2
            },
            "prefix": {
              "text": "",
              "location": 0,
              "length": 0
            },
            "suffix": {
              "text": "",
              "location": 2,
              "length": 0
            },
            "linker": {
              "text": "",
              "location": 0,
              "length": 0
            }
          }
        ],
        "tokensEqualSize": true,
        "ord": [
          "tmSTbMP8s2y",
          "tG4KXjpphVs"
        ],
        "sols": [
          {
            "key": "RizXNkKlwJqTepMBamclhV9hH4h8vKGX",
            "audio_updated_at": 1580705395,
            "text": "گھاس سبز ہے۔",
            "phonetic": "Ghaas sabz hai.",
            "dictionary": [
              {
                "raw": "گھاس",
                "translations": []
              },
              {
                "raw": "سبز",
                "translations": [
                  {
                    "type": "dictionary",
                    "text": "أخضر",
                    "phonetic": null
                  }
                ]
              },
              {
                "raw": "ہے",
                "translations": [
                  {
                    "type": "verb",
                    "name": {
                      "t": "متّفق ہونا",
                      "m": "يوافق",
                      "phonetic": "muttafiq hona"
                    },
                    "id": 1,
                    "tenseNames": {
                      "pr": "الحاضر",
                      "pa": "ماضي",
                      "fu": "مستقبل"
                    },
                    "conj": {
                      "pr": [
                        {
                          "t": {
                            "key": "ILulDenvPwHSmrUhzuSBdXwvJ-QjKoyp",
                            "text": "میں متّفق ہوتا ہوں",
                            "phonetic": "Mein muttafiq hota hoon",
                            "audio_updated_at": 1580692919
                          },
                          "m": {
                            "text": "أنا أوافق"
                          }
                        },
                        {
                          "t": {
                            "key": "tRwjOBCOhXT8RbfFan5KJLMBmu6fw-2b",
                            "text": "تم متّفق ہوتے ہو",
                            "phonetic": "Tum muttafiq hotay ho",
                            "audio_updated_at": 1580692921
                          },
                          "m": {
                            "text": "أنت توافق"
                          }
                        },
                        {
                          "t": {
                            "key": "v1Y_DdoUpq2lF8amygECA1hyoxaXV-gL",
                            "text": "وہ متّفق ہوتا ہے",
                            "phonetic": "Wo muttafiq hota hai",
                            "audio_updated_at": 1580692923
                          },
                          "m": {
                            "text": "هو يوافق"
                          }
                        },
                        {
                          "t": {
                            "key": "hXk3UMfDAMi5Nq-Dwy0aSGqR7wUM36CA",
                            "text": "وہ متّفق ہوتی ہے",
                            "phonetic": "Wo muttafiq hoti hai",
                            "audio_updated_at": 1580692925
                          },
                          "m": {
                            "text": "هي توافق"
                          }
                        },
                        {
                          "t": {
                            "key": "Z-7SYfgQPo46ZkGsGcRL7FtMn4JjbMi3",
                            "text": "ہم متّفق ہوتے ہیں",
                            "phonetic": "Hum muttafiq hotay hain",
                            "audio_updated_at": 1580692929
                          },
                          "m": {
                            "text": "نحن نوافق"
                          }
                        },
                        {
                          "t": {
                            "key": "YHPOGPQLWeWIL2wzkaadaCzDyOklpbtw",
                            "text": "آپ متّفق ہوتے ہیں",
                            "phonetic": "Aap muttafiq hotay hain",
                            "audio_updated_at": 1580692931
                          },
                          "m": {
                            "text": "أنتم توافقون"
                          }
                        },
                        {
                          "t": {
                            "key": "XstYItwshUedYqu8yaE-eb1JS0dNY_3V",
                            "text": "وہ متّفق ہوتے ہیں",
                            "phonetic": "Wo muttafiq hotay hain",
                            "audio_updated_at": 1580692932
                          },
                          "m": {
                            "text": "هم يوافقون"
                          }
                        }
                      ],
                      "pa": [
                        {
                          "t": {
                            "key": "JYIRRloDnLNan4PYnn6hjcvhMcet0WD1",
                            "text": "میں متّفق ہوا",
                            "phonetic": "Mein muttafiq hua",
                            "audio_updated_at": 1580692934
                          },
                          "m": {
                            "text": "أنا وافقت"
                          }
                        },
                        {
                          "t": {
                            "key": "b89-0T_2GdO9ZWYX6oHtePfHFvl7aGaB",
                            "text": "تم متّفق ہوئے",
                            "phonetic": "Tum muttafiq huay",
                            "audio_updated_at": 1580692936
                          },
                          "m": {
                            "text": "أنت وافقت"
                          }
                        },
                        {
                          "t": {
                            "key": "5Kesu04ngj6TrurmE3DoV24c2DgiRuPi",
                            "text": "وہ متّفق ہوا",
                            "phonetic": "Wo muttafiq hua",
                            "audio_updated_at": 1580692938
                          },
                          "m": {
                            "text": "هو وافق"
                          }
                        },
                        {
                          "t": {
                            "key": "bJnTTyXZzvvQnFBqzhVFtYdjePdGS8Nt",
                            "text": "وہ متّفق ہوئی",
                            "phonetic": "Wo muttafiq hui",
                            "audio_updated_at": 1580692939
                          },
                          "m": {
                            "text": "هي وافقت"
                          }
                        },
                        {
                          "t": {
                            "key": "6jbKTg-yy4CpgadT7AGIlL73edwHln5R",
                            "text": "ہم متّفق ہوئے",
                            "phonetic": "Hum muttafiq huay",
                            "audio_updated_at": 1580692943
                          },
                          "m": {
                            "text": "نحن وافقنا"
                          }
                        },
                        {
                          "t": {
                            "key": "Q4O8uGGY0Yz1Runhm2z3jIrtwe4agkSW",
                            "text": "آپ متّفق ہوئے",
                            "phonetic": "Aap muttafiq huay",
                            "audio_updated_at": 1580692945
                          },
                          "m": {
                            "text": "أنتم وافقتم"
                          }
                        },
                        {
                          "t": {
                            "key": "zDR_uqvyzA2xaP4vPmCaHNC6uvkXoLCN",
                            "text": "وہ متّفق ہوئے",
                            "phonetic": "Wo muttafiq huay",
                            "audio_updated_at": 1580692946
                          },
                          "m": {
                            "text": "هم وافقوا"
                          }
                        }
                      ],
                      "fu": [
                        {
                          "t": {
                            "key": "j6UK9u9ekeOG_VU6w29oNUVI1n-td3qj",
                            "text": "میں متّفق ہوں گا",
                            "phonetic": "Mein muttafiq hoon ga",
                            "audio_updated_at": 1580692948
                          },
                          "m": {
                            "text": "أنا سأوافق"
                          }
                        },
                        {
                          "t": {
                            "key": "oZFt-tLlXNmJnfcC-ZIxitkWJjZsR4DF",
                            "text": "تم متّفق ہو گے",
                            "phonetic": "Tum muttafiq ho gay",
                            "audio_updated_at": 1580692950
                          },
                          "m": {
                            "text": "أنت ستوافق"
                          }
                        },
                        {
                          "t": {
                            "key": "f2yewJfPLzDgQBRrXgu_bSesRq5s3WZt",
                            "text": "وہ متّفق ہوگا",
                            "phonetic": "Wo muttafiq ho ga",
                            "audio_updated_at": 1580692952
                          },
                          "m": {
                            "text": "هو سيوافق"
                          }
                        },
                        {
                          "t": {
                            "key": "POlQ-7Y26Fy6JIDgWRrGgyrosRQvgJf4",
                            "text": "وہ متّفق ہو گی",
                            "phonetic": "Wo muttafiq ho gi",
                            "audio_updated_at": 1580692954
                          },
                          "m": {
                            "text": "هي ستوافق"
                          }
                        },
                        {
                          "t": {
                            "key": "2nh6PEhVjxPVdsWh42jrcdntSDcy7Stp",
                            "text": "ہم متّفق ہوں گے",
                            "phonetic": "Hum muttafiq hon gay",
                            "audio_updated_at": 1580692958
                          },
                          "m": {
                            "text": "نحن سنوافق"
                          }
                        },
                        {
                          "t": {
                            "key": "_TThGfBkwBU1nh9vEXcVXqLAmJKoZ8AG",
                            "text": "آپ متّفق ہوں گے",
                            "phonetic": "Aap muttafiq hon gay",
                            "audio_updated_at": 1580692960
                          },
                          "m": {
                            "text": "أنتم ستوافقون"
                          }
                        },
                        {
                          "t": {
                            "key": "Nl3attkofIOZbIBetJNNRmJIThUIiO3O",
                            "text": "وہ متّفق ہوں گے",
                            "phonetic": "Wo muttafiq hon gay",
                            "audio_updated_at": 1580692962
                          },
                          "m": {
                            "text": "هم سيوافقون"
                          }
                        }
                      ]
                    }
                  }
                ]
              }
            ],
            "phraseType": 1,
            "text_tokens": [
              {
                "raw": {
                  "text": "گھاس",
                  "location": 0,
                  "length": 4
                },
                "prefix": {
                  "text": "",
                  "location": 0,
                  "length": 0
                },
                "suffix": {
                  "text": "",
                  "location": 4,
                  "length": 0
                },
                "linker": {
                  "text": "",
                  "location": 0,
                  "length": 0
                }
              },
              {
                "raw": {
                  "text": "سبز",
                  "location": 5,
                  "length": 3
                },
                "prefix": {
                  "text": "",
                  "location": 5,
                  "length": 0
                },
                "suffix": {
                  "text": "",
                  "location": 8,
                  "length": 0
                },
                "linker": {
                  "text": " ",
                  "location": 4,
                  "length": 1
                }
              },
              {
                "raw": {
                  "text": "ہے",
                  "location": 9,
                  "length": 2
                },
                "prefix": {
                  "text": "",
                  "location": 9,
                  "length": 0
                },
                "suffix": {
                  "text": "۔",
                  "location": 11,
                  "length": 1
                },
                "linker": {
                  "text": " ",
                  "location": 8,
                  "length": 1
                }
              }
            ],
            "phonetic_tokens": [
              {
                "raw": {
                  "text": "Ghaas",
                  "location": 0,
                  "length": 5
                },
                "prefix": {
                  "text": "",
                  "location": 0,
                  "length": 0
                },
                "suffix": {
                  "text": "",
                  "location": 5,
                  "length": 0
                },
                "linker": {
                  "text": "",
                  "location": 0,
                  "length": 0
                }
              },
              {
                "raw": {
                  "text": "sabz",
                  "location": 6,
                  "length": 4
                },
                "prefix": {
                  "text": "",
                  "location": 6,
                  "length": 0
                },
                "suffix": {
                  "text": "",
                  "location": 10,
                  "length": 0
                },
                "linker": {
                  "text": " ",
                  "location": 5,
                  "length": 1
                }
              },
              {
                "raw": {
                  "text": "hai",
                  "location": 11,
                  "length": 3
                },
                "prefix": {
                  "text": "",
                  "location": 11,
                  "length": 0
                },
                "suffix": {
                  "text": ".",
                  "location": 14,
                  "length": 1
                },
                "linker": {
                  "text": " ",
                  "location": 10,
                  "length": 1
                }
              }
            ]
          },
          {
            "key": "RizXNkKlwJqTepMBamclhV9hH4h8vKGX",
            "audio_updated_at": 1580705395,
            "text": "‫العشب أخضر.‬"
          }
        ]
      }
    },
    {
      "id": 626972,
      "lesson": 601,
      "type": "T2",
      "modifiers": 60,
      "wordID": 18170,
      "alternates": [],
      "sols": [
        {
          "key": "hP35wEyouJw8xpnsXoJ081tZsQXSoXhg",
          "audio_updated_at": 1688821935,
          "text": "برف سفید ہے۔",
          "phonetic": "Barf safaid hai.",
          "dictionary": [
            {
              "raw": "برف",
              "translations": []
            },
            {
              "raw": "سفید",
              "translations": [
                {
                  "type": "dictionary",
                  "text": "أبيض",
                  "phonetic": null
                }
              ]
            },
            {
              "raw": "ہے",
              "translations": [
                {
                  "type": "verb",
                  "name": {
                    "t": "متّفق ہونا",
                    "m": "يوافق",
                    "phonetic": "muttafiq hona"
                  },
                  "id": 1,
                  "tenseNames": {
                    "pr": "الحاضر",
                    "pa": "ماضي",
                    "fu": "مستقبل"
                  },
                  "conj": {
                    "pr": [
                      {
                        "t": {
                          "key": "ILulDenvPwHSmrUhzuSBdXwvJ-QjKoyp",
                          "text": "میں متّفق ہوتا ہوں",
                          "phonetic": "Mein muttafiq hota hoon",
                          "audio_updated_at": 1580692919
                        },
                        "m": {
                          "text": "أنا أوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "tRwjOBCOhXT8RbfFan5KJLMBmu6fw-2b",
                          "text": "تم متّفق ہوتے ہو",
                          "phonetic": "Tum muttafiq hotay ho",
                          "audio_updated_at": 1580692921
                        },
                        "m": {
                          "text": "أنت توافق"
                        }
                      },
                      {
                        "t": {
                          "key": "v1Y_DdoUpq2lF8amygECA1hyoxaXV-gL",
                          "text": "وہ متّفق ہوتا ہے",
                          "phonetic": "Wo muttafiq hota hai",
                          "audio_updated_at": 1580692923
                        },
                        "m": {
                          "text": "هو يوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "hXk3UMfDAMi5Nq-Dwy0aSGqR7wUM36CA",
                          "text": "وہ متّفق ہوتی ہے",
                          "phonetic": "Wo muttafiq hoti hai",
                          "audio_updated_at": 1580692925
                        },
                        "m": {
                          "text": "هي توافق"
                        }
                      },
                      {
                        "t": {
                          "key": "Z-7SYfgQPo46ZkGsGcRL7FtMn4JjbMi3",
                          "text": "ہم متّفق ہوتے ہیں",
                          "phonetic": "Hum muttafiq hotay hain",
                          "audio_updated_at": 1580692929
                        },
                        "m": {
                          "text": "نحن نوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "YHPOGPQLWeWIL2wzkaadaCzDyOklpbtw",
                          "text": "آپ متّفق ہوتے ہیں",
                          "phonetic": "Aap muttafiq hotay hain",
                          "audio_updated_at": 1580692931
                        },
                        "m": {
                          "text": "أنتم توافقون"
                        }
                      },
                      {
                        "t": {
                          "key": "XstYItwshUedYqu8yaE-eb1JS0dNY_3V",
                          "text": "وہ متّفق ہوتے ہیں",
                          "phonetic": "Wo muttafiq hotay hain",
                          "audio_updated_at": 1580692932
                        },
                        "m": {
                          "text": "هم يوافقون"
                        }
                      }
                    ],
                    "pa": [
                      {
                        "t": {
                          "key": "JYIRRloDnLNan4PYnn6hjcvhMcet0WD1",
                          "text": "میں متّفق ہوا",
                          "phonetic": "Mein muttafiq hua",
                          "audio_updated_at": 1580692934
                        },
                        "m": {
                          "text": "أنا وافقت"
                        }
                      },
                      {
                        "t": {
                          "key": "b89-0T_2GdO9ZWYX6oHtePfHFvl7aGaB",
                          "text": "تم متّفق ہوئے",
                          "phonetic": "Tum muttafiq huay",
                          "audio_updated_at": 1580692936
                        },
                        "m": {
                          "text": "أنت وافقت"
                        }
                      },
                      {
                        "t": {
                          "key": "5Kesu04ngj6TrurmE3DoV24c2DgiRuPi",
                          "text": "وہ متّفق ہوا",
                          "phonetic": "Wo muttafiq hua",
                          "audio_updated_at": 1580692938
                        },
                        "m": {
                          "text": "هو وافق"
                        }
                      },
                      {
                        "t": {
                          "key": "bJnTTyXZzvvQnFBqzhVFtYdjePdGS8Nt",
                          "text": "وہ متّفق ہوئی",
                          "phonetic": "Wo muttafiq hui",
                          "audio_updated_at": 1580692939
                        },
                        "m": {
                          "text": "هي وافقت"
                        }
                      },
                      {
                        "t": {
                          "key": "6jbKTg-yy4CpgadT7AGIlL73edwHln5R",
                          "text": "ہم متّفق ہوئے",
                          "phonetic": "Hum muttafiq huay",
                          "audio_updated_at": 1580692943
                        },
                        "m": {
                          "text": "نحن وافقنا"
                        }
                      },
                      {
                        "t": {
                          "key": "Q4O8uGGY0Yz1Runhm2z3jIrtwe4agkSW",
                          "text": "آپ متّفق ہوئے",
                          "phonetic": "Aap muttafiq huay",
                          "audio_updated_at": 1580692945
                        },
                        "m": {
                          "text": "أنتم وافقتم"
                        }
                      },
                      {
                        "t": {
                          "key": "zDR_uqvyzA2xaP4vPmCaHNC6uvkXoLCN",
                          "text": "وہ متّفق ہوئے",
                          "phonetic": "Wo muttafiq huay",
                          "audio_updated_at": 1580692946
                        },
                        "m": {
                          "text": "هم وافقوا"
                        }
                      }
                    ],
                    "fu": [
                      {
                        "t": {
                          "key": "j6UK9u9ekeOG_VU6w29oNUVI1n-td3qj",
                          "text": "میں متّفق ہوں گا",
                          "phonetic": "Mein muttafiq hoon ga",
                          "audio_updated_at": 1580692948
                        },
                        "m": {
                          "text": "أنا سأوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "oZFt-tLlXNmJnfcC-ZIxitkWJjZsR4DF",
                          "text": "تم متّفق ہو گے",
                          "phonetic": "Tum muttafiq ho gay",
                          "audio_updated_at": 1580692950
                        },
                        "m": {
                          "text": "أنت ستوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "f2yewJfPLzDgQBRrXgu_bSesRq5s3WZt",
                          "text": "وہ متّفق ہوگا",
                          "phonetic": "Wo muttafiq ho ga",
                          "audio_updated_at": 1580692952
                        },
                        "m": {
                          "text": "هو سيوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "POlQ-7Y26Fy6JIDgWRrGgyrosRQvgJf4",
                          "text": "وہ متّفق ہو گی",
                          "phonetic": "Wo muttafiq ho gi",
                          "audio_updated_at": 1580692954
                        },
                        "m": {
                          "text": "هي ستوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "2nh6PEhVjxPVdsWh42jrcdntSDcy7Stp",
                          "text": "ہم متّفق ہوں گے",
                          "phonetic": "Hum muttafiq hon gay",
                          "audio_updated_at": 1580692958
                        },
                        "m": {
                          "text": "نحن سنوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "_TThGfBkwBU1nh9vEXcVXqLAmJKoZ8AG",
                          "text": "آپ متّفق ہوں گے",
                          "phonetic": "Aap muttafiq hon gay",
                          "audio_updated_at": 1580692960
                        },
                        "m": {
                          "text": "أنتم ستوافقون"
                        }
                      },
                      {
                        "t": {
                          "key": "Nl3attkofIOZbIBetJNNRmJIThUIiO3O",
                          "text": "وہ متّفق ہوں گے",
                          "phonetic": "Wo muttafiq hon gay",
                          "audio_updated_at": 1580692962
                        },
                        "m": {
                          "text": "هم سيوافقون"
                        }
                      }
                    ]
                  }
                }
              ]
            }
          ],
          "phraseType": 1,
          "text_tokens": [
            {
              "raw": {
                "text": "برف",
                "location": 0,
                "length": 3
              },
              "prefix": {
                "text": "",
                "location": 0,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 3,
                "length": 0
              },
              "linker": {
                "text": "",
                "location": 0,
                "length": 0
              }
            },
            {
              "raw": {
                "text": "سفید",
                "location": 4,
                "length": 4
              },
              "prefix": {
                "text": "",
                "location": 4,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 8,
                "length": 0
              },
              "linker": {
                "text": " ",
                "location": 3,
                "length": 1
              }
            },
            {
              "raw": {
                "text": "ہے",
                "location": 9,
                "length": 2
              },
              "prefix": {
                "text": "",
                "location": 9,
                "length": 0
              },
              "suffix": {
                "text": "۔",
                "location": 11,
                "length": 1
              },
              "linker": {
                "text": " ",
                "location": 8,
                "length": 1
              }
            }
          ],
          "phonetic_tokens": [
            {
              "raw": {
                "text": "Barf",
                "location": 0,
                "length": 4
              },
              "prefix": {
                "text": "",
                "location": 0,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 4,
                "length": 0
              },
              "linker": {
                "text": "",
                "location": 0,
                "length": 0
              }
            },
            {
              "raw": {
                "text": "safaid",
                "location": 5,
                "length": 6
              },
              "prefix": {
                "text": "",
                "location": 5,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 11,
                "length": 0
              },
              "linker": {
                "text": " ",
                "location": 4,
                "length": 1
              }
            },
            {
              "raw": {
                "text": "hai",
                "location": 12,
                "length": 3
              },
              "prefix": {
                "text": "",
                "location": 12,
                "length": 0
              },
              "suffix": {
                "text": ".",
                "location": 15,
                "length": 1
              },
              "linker": {
                "text": " ",
                "location": 11,
                "length": 1
              }
            }
          ]
        },
        {
          "key": "hP35wEyouJw8xpnsXoJ081tZsQXSoXhg",
          "audio_updated_at": 1688821935,
          "text": "‫الثلج أبيض.‬"
        }
      ]
    },
    {
      "id": 626973,
      "lesson": 601,
      "type": "T1b",
      "modifiers": 72,
      "wordID": 18044,
      "alternates": [],
      "tokens": [
        {
          "key": "twDrZwqcVgy",
          "text": "رفتار",
          "raw": {
            "text": "رفتار",
            "location": 0,
            "length": 5
          },
          "prefix": {
            "text": "",
            "location": 0,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 5,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 0,
            "length": 0
          }
        },
        {
          "key": "tEncvY4zjfn",
          "text": "آسمان",
          "raw": {
            "text": "آسمان",
            "location": 0,
            "length": 5
          },
          "prefix": {
            "text": "",
            "location": 0,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 5,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 0,
            "length": 0
          }
        }
      ],
      "tokensEqualSize": true,
      "ord": [
        "tEncvY4zjfn"
      ],
      "tokensPhonetic": [
        {
          "key": "twDrZwqcVgy",
          "text": "raftar",
          "raw": {
            "text": "raftar",
            "location": 0,
            "length": 6
          },
          "prefix": {
            "text": "",
            "location": 0,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 6,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 0,
            "length": 0
          }
        },
        {
          "key": "tEncvY4zjfn",
          "text": "aasman",
          "raw": {
            "text": "aasman",
            "location": 0,
            "length": 6
          },
          "prefix": {
            "text": "",
            "location": 0,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 6,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 0,
            "length": 0
          }
        }
      ],
      "sols": [
        {
          "key": "6Y8BIHAMU7ArYSaa-AjG7tBCx07te2lh",
          "audio_updated_at": 1580692097,
          "text": "سماء",
          "dictionary": [
            {
              "raw": "سماء",
              "translations": [
                {
                  "type": "dictionary",
                  "text": "آسمان",
                  "phonetic": "aasman"
                }
              ]
            }
          ],
          "phraseType": 0,
          "text_tokens": [
            {
              "raw": {
                "text": "سماء",
                "location": 0,
                "length": 4
              },
              "prefix": {
                "text": "",
                "location": 0,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 4,
                "length": 0
              },
              "linker": {
                "text": "",
                "location": 0,
                "length": 0
              }
            }
          ]
        },
        {
          "key": "6Y8BIHAMU7ArYSaa-AjG7tBCx07te2lh",
          "audio_updated_at": 1580692097,
          "text": "آسمان",
          "phonetic": "aasman"
        }
      ]
    },
    {
      "id": 626974,
      "lesson": 601,
      "type": "L1",
      "modifiers": 42,
      "wordID": 18167,
      "alternates": [],
      "tokens": [
        {
          "key": "tCJDOq8DXA6",
          "text": "ما",
          "raw": {
            "text": "ما",
            "location": 0,
            "length": 2
          },
          "prefix": {
            "text": "",
            "location": 0,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 2,
            "length": 0
          },
          "linker": {
            "text": "",
            "location": 0,
            "length": 0
          }
        },
        {
          "key": "tIwLYgMNy1Z",
          "text": "الثلج؟",
          "raw": {
            "text": "الثلج",
            "location": 7,
            "length": 5
          },
          "prefix": {
            "text": "",
            "location": 7,
            "length": 0
          },
          "suffix": {
            "text": "؟",
            "location": 12,
            "length": 1
          },
          "linker": {
            "text": " ",
            "location": 6,
            "length": 1
          }
        },
        {
          "key": "te40RcU58QY",
          "text": "السماء؟",
          "raw": {
            "text": "السماء",
            "location": 7,
            "length": 6
          },
          "prefix": {
            "text": "",
            "location": 7,
            "length": 0
          },
          "suffix": {
            "text": "؟",
            "location": 13,
            "length": 1
          },
          "linker": {
            "text": " ",
            "location": 6,
            "length": 1
          }
        },
        {
          "key": "t_b785lEIVa",
          "text": "لون",
          "raw": {
            "text": "لون",
            "location": 3,
            "length": 3
          },
          "prefix": {
            "text": "",
            "location": 3,
            "length": 0
          },
          "suffix": {
            "text": "",
            "location": 6,
            "length": 0
          },
          "linker": {
            "text": " ",
            "location": 2,
            "length": 1
          }
        }
      ],
      "tokensEqualSize": true,
      "ord": [
        "tCJDOq8DXA6",
        "t_b785lEIVa",
        "te40RcU58QY"
      ],
      "sols": [
        {
          "key": "Mru5AvwhaT0CF7MOV5zN4pnbOgyUas7G",
          "audio_updated_at": 1688821934,
          "text": "آسمان کا رنگ کیا ہے؟",
          "phonetic": "Aasman ka rang kya hai?"
        },
        {
          "key": "Mru5AvwhaT0CF7MOV5zN4pnbOgyUas7G",
          "audio_updated_at": 1688821934,
          "text": "ما لون السماء؟"
        }
      ]
    },
    {
      "id": 626975,
      "lesson": 601,
      "type": "T2b",
      "modifiers": 92,
      "wordID": 18168,
      "alternates": [],
      "sols": [
        {
          "key": "srHCcIYkBC2HIZMeg_R54Ru2C09prHcB",
          "audio_updated_at": 1580705393,
          "text": "‫السماء زرقاء.‬",
          "dictionary": [
            {
              "raw": "السماء",
              "translations": [
                {
                  "type": "dictionary",
                  "text": "آسمان",
                  "phonetic": "Aasman"
                }
              ]
            },
            {
              "raw": "زرقاء",
              "translations": [
                {
                  "type": "dictionary",
                  "text": "نیلا",
                  "phonetic": "neela"
                }
              ]
            }
          ],
          "phraseType": 1,
          "text_tokens": [
            {
              "raw": {
                "text": "السماء",
                "location": 1,
                "length": 6
              },
              "prefix": {
                "text": "",
                "location": 1,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 7,
                "length": 0
              },
              "linker": {
                "text": "",
                "location": 1,
                "length": 0
              }
            },
            {
              "raw": {
                "text": "زرقاء",
                "location": 8,
                "length": 5
              },
              "prefix": {
                "text": "",
                "location": 8,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 13,
                "length": 0
              },
              "linker": {
                "text": " ",
                "location": 7,
                "length": 1
              }
            }
          ]
        },
        {
          "key": "srHCcIYkBC2HIZMeg_R54Ru2C09prHcB",
          "audio_updated_at": 1580705393,
          "text": "آسمان نیلا ہے۔",
          "phonetic": "Aasman neela hai."
        }
      ]
    },
    {
      "id": 626976,
      "lesson": 601,
      "type": "Qb",
      "modifiers": 73,
      "wordID": 18171,
      "alternates": [
        18167,
        18168
      ],
      "sols": [
        {
          "key": "c028vEWW-8NuewEycNNscwqOeaGf-JoI",
          "audio_updated_at": 1688821936,
          "text": "ما لون الشمس؟",
          "dictionary": [
            {
              "raw": "ما",
              "translations": [
                {
                  "type": "dictionary",
                  "text": "کیا",
                  "phonetic": "kya"
                }
              ]
            },
            {
              "raw": "لون",
              "translations": [
                {
                  "type": "dictionary",
                  "text": "رنگ",
                  "phonetic": "rang"
                }
              ]
            },
            {
              "raw": "الشمس",
              "translations": [
                {
                  "type": "dictionary",
                  "text": "سورج",
                  "phonetic": "sooraj"
                }
              ]
            }
          ],
          "phraseType": 1,
          "text_tokens": [
            {
              "raw": {
                "text": "ما",
                "location": 0,
                "length": 2
              },
              "prefix": {
                "text": "",
                "location": 0,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 2,
                "length": 0
              },
              "linker": {
                "text": "",
                "location": 0,
                "length": 0
              }
            },
            {
              "raw": {
                "text": "لون",
                "location": 3,
                "length": 3
              },
              "prefix": {
                "text": "",
                "location": 3,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 6,
                "length": 0
              },
              "linker": {
                "text": " ",
                "location": 2,
                "length": 1
              }
            },
            {
              "raw": {
                "text": "الشمس",
                "location": 7,
                "length": 5
              },
              "prefix": {
                "text": "",
                "location": 7,
                "length": 0
              },
              "suffix": {
                "text": "؟",
                "location": 12,
                "length": 1
              },
              "linker": {
                "text": " ",
                "location": 6,
                "length": 1
              }
            }
          ]
        },
        {
          "key": "Mru5AvwhaT0CF7MOV5zN4pnbOgyUas7G",
          "text": "ما لون السماء؟"
        },
        {
          "key": "srHCcIYkBC2HIZMeg_R54Ru2C09prHcB",
          "text": "‫السماء زرقاء.‬"
        }
      ],
      "alts": [
        {
          "key": "c028vEWW-8NuewEycNNscwqOeaGf-JoI",
          "audio_updated_at": 1688821936,
          "text": "سورج کا رنگ کیا ہے؟",
          "phonetic": "Sooraj ka rang kya hai?"
        },
        {
          "key": "Mru5AvwhaT0CF7MOV5zN4pnbOgyUas7G",
          "audio_updated_at": 1688821934,
          "text": "آسمان کا رنگ کیا ہے؟",
          "phonetic": "Aasman ka rang kya hai?"
        },
        {
          "key": "srHCcIYkBC2HIZMeg_R54Ru2C09prHcB",
          "audio_updated_at": 1580705393,
          "text": "آسمان نیلا ہے۔",
          "phonetic": "Aasman neela hai."
        }
      ]
    },
    {
      "id": 626977,
      "lesson": 601,
      "type": "Q",
      "modifiers": 41,
      "wordID": 18172,
      "alternates": [
        18170,
        18162
      ],
      "sols": [
        {
          "key": "0wZRF17w6KxeTqX4TKqs04aK0sMghXSC",
          "audio_updated_at": 1580705388,
          "text": "سورج پیلا ہے۔",
          "phonetic": "Sooraj peela hai.",
          "dictionary": [
            {
              "raw": "سورج",
              "translations": [
                {
                  "type": "dictionary",
                  "text": "الشمس",
                  "phonetic": null
                }
              ]
            },
            {
              "raw": "پیلا",
              "translations": []
            },
            {
              "raw": "ہے",
              "translations": [
                {
                  "type": "verb",
                  "name": {
                    "t": "متّفق ہونا",
                    "m": "يوافق",
                    "phonetic": "muttafiq hona"
                  },
                  "id": 1,
                  "tenseNames": {
                    "pr": "الحاضر",
                    "pa": "ماضي",
                    "fu": "مستقبل"
                  },
                  "conj": {
                    "pr": [
                      {
                        "t": {
                          "key": "ILulDenvPwHSmrUhzuSBdXwvJ-QjKoyp",
                          "text": "میں متّفق ہوتا ہوں",
                          "phonetic": "Mein muttafiq hota hoon",
                          "audio_updated_at": 1580692919
                        },
                        "m": {
                          "text": "أنا أوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "tRwjOBCOhXT8RbfFan5KJLMBmu6fw-2b",
                          "text": "تم متّفق ہوتے ہو",
                          "phonetic": "Tum muttafiq hotay ho",
                          "audio_updated_at": 1580692921
                        },
                        "m": {
                          "text": "أنت توافق"
                        }
                      },
                      {
                        "t": {
                          "key": "v1Y_DdoUpq2lF8amygECA1hyoxaXV-gL",
                          "text": "وہ متّفق ہوتا ہے",
                          "phonetic": "Wo muttafiq hota hai",
                          "audio_updated_at": 1580692923
                        },
                        "m": {
                          "text": "هو يوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "hXk3UMfDAMi5Nq-Dwy0aSGqR7wUM36CA",
                          "text": "وہ متّفق ہوتی ہے",
                          "phonetic": "Wo muttafiq hoti hai",
                          "audio_updated_at": 1580692925
                        },
                        "m": {
                          "text": "هي توافق"
                        }
                      },
                      {
                        "t": {
                          "key": "Z-7SYfgQPo46ZkGsGcRL7FtMn4JjbMi3",
                          "text": "ہم متّفق ہوتے ہیں",
                          "phonetic": "Hum muttafiq hotay hain",
                          "audio_updated_at": 1580692929
                        },
                        "m": {
                          "text": "نحن نوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "YHPOGPQLWeWIL2wzkaadaCzDyOklpbtw",
                          "text": "آپ متّفق ہوتے ہیں",
                          "phonetic": "Aap muttafiq hotay hain",
                          "audio_updated_at": 1580692931
                        },
                        "m": {
                          "text": "أنتم توافقون"
                        }
                      },
                      {
                        "t": {
                          "key": "XstYItwshUedYqu8yaE-eb1JS0dNY_3V",
                          "text": "وہ متّفق ہوتے ہیں",
                          "phonetic": "Wo muttafiq hotay hain",
                          "audio_updated_at": 1580692932
                        },
                        "m": {
                          "text": "هم يوافقون"
                        }
                      }
                    ],
                    "pa": [
                      {
                        "t": {
                          "key": "JYIRRloDnLNan4PYnn6hjcvhMcet0WD1",
                          "text": "میں متّفق ہوا",
                          "phonetic": "Mein muttafiq hua",
                          "audio_updated_at": 1580692934
                        },
                        "m": {
                          "text": "أنا وافقت"
                        }
                      },
                      {
                        "t": {
                          "key": "b89-0T_2GdO9ZWYX6oHtePfHFvl7aGaB",
                          "text": "تم متّفق ہوئے",
                          "phonetic": "Tum muttafiq huay",
                          "audio_updated_at": 1580692936
                        },
                        "m": {
                          "text": "أنت وافقت"
                        }
                      },
                      {
                        "t": {
                          "key": "5Kesu04ngj6TrurmE3DoV24c2DgiRuPi",
                          "text": "وہ متّفق ہوا",
                          "phonetic": "Wo muttafiq hua",
                          "audio_updated_at": 1580692938
                        },
                        "m": {
                          "text": "هو وافق"
                        }
                      },
                      {
                        "t": {
                          "key": "bJnTTyXZzvvQnFBqzhVFtYdjePdGS8Nt",
                          "text": "وہ متّفق ہوئی",
                          "phonetic": "Wo muttafiq hui",
                          "audio_updated_at": 1580692939
                        },
                        "m": {
                          "text": "هي وافقت"
                        }
                      },
                      {
                        "t": {
                          "key": "6jbKTg-yy4CpgadT7AGIlL73edwHln5R",
                          "text": "ہم متّفق ہوئے",
                          "phonetic": "Hum muttafiq huay",
                          "audio_updated_at": 1580692943
                        },
                        "m": {
                          "text": "نحن وافقنا"
                        }
                      },
                      {
                        "t": {
                          "key": "Q4O8uGGY0Yz1Runhm2z3jIrtwe4agkSW",
                          "text": "آپ متّفق ہوئے",
                          "phonetic": "Aap muttafiq huay",
                          "audio_updated_at": 1580692945
                        },
                        "m": {
                          "text": "أنتم وافقتم"
                        }
                      },
                      {
                        "t": {
                          "key": "zDR_uqvyzA2xaP4vPmCaHNC6uvkXoLCN",
                          "text": "وہ متّفق ہوئے",
                          "phonetic": "Wo muttafiq huay",
                          "audio_updated_at": 1580692946
                        },
                        "m": {
                          "text": "هم وافقوا"
                        }
                      }
                    ],
                    "fu": [
                      {
                        "t": {
                          "key": "j6UK9u9ekeOG_VU6w29oNUVI1n-td3qj",
                          "text": "میں متّفق ہوں گا",
                          "phonetic": "Mein muttafiq hoon ga",
                          "audio_updated_at": 1580692948
                        },
                        "m": {
                          "text": "أنا سأوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "oZFt-tLlXNmJnfcC-ZIxitkWJjZsR4DF",
                          "text": "تم متّفق ہو گے",
                          "phonetic": "Tum muttafiq ho gay",
                          "audio_updated_at": 1580692950
                        },
                        "m": {
                          "text": "أنت ستوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "f2yewJfPLzDgQBRrXgu_bSesRq5s3WZt",
                          "text": "وہ متّفق ہوگا",
                          "phonetic": "Wo muttafiq ho ga",
                          "audio_updated_at": 1580692952
                        },
                        "m": {
                          "text": "هو سيوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "POlQ-7Y26Fy6JIDgWRrGgyrosRQvgJf4",
                          "text": "وہ متّفق ہو گی",
                          "phonetic": "Wo muttafiq ho gi",
                          "audio_updated_at": 1580692954
                        },
                        "m": {
                          "text": "هي ستوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "2nh6PEhVjxPVdsWh42jrcdntSDcy7Stp",
                          "text": "ہم متّفق ہوں گے",
                          "phonetic": "Hum muttafiq hon gay",
                          "audio_updated_at": 1580692958
                        },
                        "m": {
                          "text": "نحن سنوافق"
                        }
                      },
                      {
                        "t": {
                          "key": "_TThGfBkwBU1nh9vEXcVXqLAmJKoZ8AG",
                          "text": "آپ متّفق ہوں گے",
                          "phonetic": "Aap muttafiq hon gay",
                          "audio_updated_at": 1580692960
                        },
                        "m": {
                          "text": "أنتم ستوافقون"
                        }
                      },
                      {
                        "t": {
                          "key": "Nl3attkofIOZbIBetJNNRmJIThUIiO3O",
                          "text": "وہ متّفق ہوں گے",
                          "phonetic": "Wo muttafiq hon gay",
                          "audio_updated_at": 1580692962
                        },
                        "m": {
                          "text": "هم سيوافقون"
                        }
                      }
                    ]
                  }
                }
              ]
            }
          ],
          "phraseType": 1,
          "text_tokens": [
            {
              "raw": {
                "text": "سورج",
                "location": 0,
                "length": 4
              },
              "prefix": {
                "text": "",
                "location": 0,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 4,
                "length": 0
              },
              "linker": {
                "text": "",
                "location": 0,
                "length": 0
              }
            },
            {
              "raw": {
                "text": "پیلا",
                "location": 5,
                "length": 4
              },
              "prefix": {
                "text": "",
                "location": 5,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 9,
                "length": 0
              },
              "linker": {
                "text": " ",
                "location": 4,
                "length": 1
              }
            },
            {
              "raw": {
                "text": "ہے",
                "location": 10,
                "length": 2
              },
              "prefix": {
                "text": "",
                "location": 10,
                "length": 0
              },
              "suffix": {
                "text": "۔",
                "location": 12,
                "length": 1
              },
              "linker": {
                "text": " ",
                "location": 9,
                "length": 1
              }
            }
          ],
          "phonetic_tokens": [
            {
              "raw": {
                "text": "Sooraj",
                "location": 0,
                "length": 6
              },
              "prefix": {
                "text": "",
                "location": 0,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 6,
                "length": 0
              },
              "linker": {
                "text": "",
                "location": 0,
                "length": 0
              }
            },
            {
              "raw": {
                "text": "peela",
                "location": 7,
                "length": 5
              },
              "prefix": {
                "text": "",
                "location": 7,
                "length": 0
              },
              "suffix": {
                "text": "",
                "location": 12,
                "length": 0
              },
              "linker": {
                "text": " ",
                "location": 6,
                "length": 1
              }
            },
            {
              "raw": {
                "text": "hai",
                "location": 13,
                "length": 3
              },
              "prefix": {
                "text": "",
                "location": 13,
                "length": 0
              },
              "suffix": {
                "text": ".",
                "location": 16,
                "length": 1
              },
              "linker": {
                "text": " ",
                "location": 12,
                "length": 1
              }
            }
          ]
        },
        {
          "key": "RizXNkKlwJqTepMBamclhV9hH4h8vKGX",
          "text": "گھاس سبز ہے۔",
          "phonetic": "Ghaas sabz hai."
        },
        {
          "key": "hP35wEyouJw8xpnsXoJ081tZsQXSoXhg",
          "text": "برف سفید ہے۔",
          "phonetic": "Barf safaid hai."
        }
      ],
      "alts": [
        {
          "key": "0wZRF17w6KxeTqX4TKqs04aK0sMghXSC",
          "audio_updated_at": 1580705388,
          "text": "الشمس صفراء."
        },
        {
          "key": "RizXNkKlwJqTepMBamclhV9hH4h8vKGX",
          "audio_updated_at": 1580705395,
          "text": "‫العشب أخضر.‬"
        },
        {
          "key": "hP35wEyouJw8xpnsXoJ081tZsQXSoXhg",
          "audio_updated_at": 1688821935,
          "text": "‫الثلج أبيض.‬"
        }
      ]
    }
  ]
}

*/
