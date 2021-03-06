<?php

$json = "{
  \"name\": \"whatDoYouWant\",
  \"title\": \"Чем мы можем быть Вам полезны?\",
  \"type\": \"radios\",
  \"variables\": [
    {
      \"varname\": \"create-system\",
      \"vartitle\": \"Создать систему продаж в интернете\",
      \"next\": {
        \"name\": \"companyName\",
        \"title\": \"Название Вашей компании\",
        \"type\": \"text\",
        \"variables\": [
          {
            \"varname\": \"companyName\",
            \"vartitle\": \"Название компании\",
            \"next\": {
              \"name\": \"fieldOfActivity\",
              \"title\": \"Сфера деятельности\",
              \"type\": \"text\",
              \"variables\": [
                {
                  \"varname\": \"fieldOfActivity\",
                  \"vartitle\": \"Сфера деятельности\",
                  \"next\": {
                    \"name\": \"yourCity\",
                    \"title\": \"В каком городе работает компания\",
                    \"type\": \"text\",
                    \"variables\": [
                      {
                        \"varname\": \"yourCity\",
                        \"vartitle\": \" Город\",
                        \"next\": {
                          \"name\": \"haveSite\",
                          \"title\": \"Есть ли у Вас сайт?\",
                          \"type\": \"radios\",
                          \"variables\": [
                            {
                              \"varname\": \"yes\",
                              \"vartitle\": \"Да\",
                              \"next\": {
                                \"name\": \"yourСompetitors\",
                                \"title\": \"Кто Ваши конкуренты\",
                                \"type\": \"textarea\",
                                \"variables\": [
                                  {
                                    \"varname\": \"yourСompetitors\",
                                    \"vartitle\": \"Кто Ваши конкуренты\",
                                    \"next\": {
                                      \"name\": \"contacts\",
                                      \"title\": \"Оставьте Ваши контакты\",
                                      \"type\": \"text\",
                                      \"variables\": [
                                        {
                                          \"varname\": \"name\",
                                          \"vartitle\": \"Имя\",
                                          \"next\": null
                                        },
                                        {
                                          \"varname\": \"phone\",
                                          \"vartitle\": \"Телефон\",
                                          \"next\": null
                                        },
                                        {
                                          \"varname\": \"email\",
                                          \"vartitle\": \"Электронная почта\",
                                          \"next\": null
                                        }
                                      ]
                                    }
                                  }
                                ]
                              }
                            },
                            {
                              \"varname\": \"no\",
                              \"vartitle\": \"Нет\",
                              \"next\": {
                                \"name\": \"yourСompetitors\",
                                \"title\": \"Кто Ваши конкуренты\",
                                \"type\": \"textarea\",
                                \"variables\": [
                                  {
                                    \"varname\": \"yourСompetitors\",
                                    \"vartitle\": \"Кто Ваши конкуренты\",
                                    \"next\": null
                                  }
                                ]
                              }
                            }
                          ]
                        }
                      }
                    ]
                  }
                }
              ]
            }
          }
        ]
      }
    },
    {
      \"varname\": \"create-system\",
      \"vartitle\": \"Создать сайт\",
      \"next\": {
        \"name\": \"whichSite\",
        \"title\": \"Какой сайт вы хотите?\",
        \"type\": \"radios\",
        \"variables\": [
          {
            \"varname\": \"image\",
            \"vartitle\": \"Имиджевый\",
            \"next\": {
              \"name\": \"companyName\",
              \"title\": \"Название Вашей компании\",
              \"type\": \"text\",
              \"variables\": [
                {
                  \"varname\": \"companyName\",
                  \"vartitle\": \"Название компании\",
                  \"next\": {
                    \"name\": \"fieldOfActivity\",
                    \"title\": \"Сфера деятельности\",
                    \"type\": \"text\",
                    \"variables\": [
                      {
                        \"varname\": \"fieldOfActivity\",
                        \"vartitle\": \"Сфера деятельности\",
                        \"next\": {
                          \"name\": \"yourCity\",
                          \"title\": \"В каком городе работает компания\",
                          \"type\": \"text\",
                          \"variables\": [
                            {
                              \"varname\": \"yourCity\",
                              \"vartitle\": \" Город\",
                              \"next\": {
                                \"name\": \"yourСompetitors\",
                                \"title\": \"Кто Ваши конкуренты\",
                                \"type\": \"textarea\",
                                \"variables\": [
                                  {
                                    \"varname\": \"yourСompetitors\",
                                    \"vartitle\": \"Кто Ваши конкуренты\",
                                    \"next\": null
                                  }
                                ]
                              }
                            }
                          ]
                        }
                      }
                    ]
                  }
                }
              ]
            }
          },
          {
            \"varname\": \"seller\",
            \"vartitle\": \"Продающий\",
            \"next\": {
              \"name\": \"howMuchCategories\",
              \"title\": \"Сколько товарных категорий\",
              \"type\": \"text\",
              \"variables\": [
                {
                  \"varname\": \"howMuchCategories\",
                  \"vartitle\": \"Сколько товарных категорий\",
                  \"next\": {
                    \"name\": \"needPayment\",
                    \"title\": \"Нужна ли возможность онлайн оплаты\",
                    \"type\": \"radios\",
                    \"variables\": [
                      {
                        \"varname\": \"yes\",
                        \"vartitle\": \"Да\",
                        \"next\": {
                          \"name\": \"need1C\",
                          \"title\": \"Нужна ли интеграция с 1С\",
                          \"type\": \"radios\",
                          \"variables\": [
                            {
                              \"varname\": \"yes\",
                              \"vartitle\": \" Да\",
                              \"next\": {
                                \"name\": \"companyName\",
                                \"title\": \"Название Вашей компании\",
                                \"type\": \"text\",
                                \"variables\": [
                                  {
                                    \"varname\": \"companyName\",
                                    \"vartitle\": \"Название компании\",
                                    \"next\": {
                                      \"name\": \"fieldOfActivity\",
                                      \"title\": \"Сфера деятельности\",
                                      \"type\": \"text\",
                                      \"variables\": [
                                        {
                                          \"varname\": \"fieldOfActivity\",
                                          \"vartitle\": \"Сфера деятельности\",
                                          \"next\": {
                                            \"name\": \"yourСompetitors\",
                                            \"title\": \"Кто Ваши конкуренты\",
                                            \"type\": \"textarea\",
                                            \"variables\": [
                                              {
                                                \"varname\": \"yourСompetitors\",
                                                \"vartitle\": \"Кто Ваши конкуренты\",
                                                \"next\": null
                                              }
                                            ]
                                          }
                                        }
                                      ]
                                    }
                                  }
                                ]
                              }
                            },
                            {
                              \"varname\": \"no\",
                              \"vartitle\": \" Нет\",
                              \"next\": {
                                \"name\": \"companyName\",
                                \"title\": \"Название Вашей компании\",
                                \"type\": \"text\",
                                \"variables\": [
                                  {
                                    \"varname\": \"companyName\",
                                    \"vartitle\": \"Название компании\",
                                    \"next\": {
                                      \"name\": \"fieldOfActivity\",
                                      \"title\": \"Сфера деятельности\",
                                      \"type\": \"text\",
                                      \"variables\": [
                                        {
                                          \"varname\": \"fieldOfActivity\",
                                          \"vartitle\": \"Сфера деятельности\",
                                          \"next\": {
                                            \"name\": \"yourСompetitors\",
                                            \"title\": \"Кто Ваши конкуренты\",
                                            \"type\": \"textarea\",
                                            \"variables\": [
                                              {
                                                \"varname\": \"yourСompetitors\",
                                                \"vartitle\": \"Кто Ваши конкуренты\",
                                                \"next\": null
                                              }
                                            ]
                                          }
                                        }
                                      ]
                                    }
                                  }
                                ]
                              }
                            }
                          ]
                        }
                      },
                      {
                        \"varname\": \"no\",
                        \"vartitle\": \"Нет\",
                        \"next\": {
                          \"name\": \"need1C\",
                          \"title\": \"Нужна ли интеграция с 1С\",
                          \"type\": \"radios\",
                          \"variables\": [
                            {
                              \"varname\": \"yes\",
                              \"vartitle\": \" Да\",
                              \"next\": {
                                \"name\": \"companyName\",
                                \"title\": \"Название Вашей компании\",
                                \"type\": \"text\",
                                \"variables\": [
                                  {
                                    \"varname\": \"companyName\",
                                    \"vartitle\": \"Название компании\",
                                    \"next\": {
                                      \"name\": \"fieldOfActivity\",
                                      \"title\": \"Сфера деятельности\",
                                      \"type\": \"text\",
                                      \"variables\": [
                                        {
                                          \"varname\": \"fieldOfActivity\",
                                          \"vartitle\": \"Сфера деятельности\",
                                          \"next\": {
                                            \"name\": \"yourСompetitors\",
                                            \"title\": \"Кто Ваши конкуренты\",
                                            \"type\": \"textarea\",
                                            \"variables\": [
                                              {
                                                \"varname\": \"yourСompetitors\",
                                                \"vartitle\": \"Кто Ваши конкуренты\",
                                                \"next\": null
                                              }
                                            ]
                                          }
                                        }
                                      ]
                                    }
                                  }
                                ]
                              }
                            },
                            {
                              \"varname\": \"no\",
                              \"vartitle\": \" Нет\",
                              \"next\": {
                                \"name\": \"companyName\",
                                \"title\": \"Название Вашей компании\",
                                \"type\": \"text\",
                                \"variables\": [
                                  {
                                    \"varname\": \"companyName\",
                                    \"vartitle\": \"Название компании\",
                                    \"next\": {
                                      \"name\": \"fieldOfActivity\",
                                      \"title\": \"Сфера деятельности\",
                                      \"type\": \"text\",
                                      \"variables\": [
                                        {
                                          \"varname\": \"fieldOfActivity\",
                                          \"vartitle\": \"Сфера деятельности\",
                                          \"next\": {
                                            \"name\": \"yourСompetitors\",
                                            \"title\": \"Кто Ваши конкуренты\",
                                            \"type\": \"textarea\",
                                            \"variables\": [
                                              {
                                                \"varname\": \"yourСompetitors\",
                                                \"vartitle\": \"Кто Ваши конкуренты\",
                                                \"next\": null
                                              }
                                            ]
                                          }
                                        }
                                      ]
                                    }
                                  }
                                ]
                              }
                            }
                          ]
                        }
                      }
                    ]
                  }
                }
              ]
            }
          }
        ]
      }
    },
    {
      \"varname\": \"internet-advertising\",
      \"vartitle\": \"Настроить рекламу в интернете\",
      \"next\": {
        \"name\": \"companyName\",
        \"title\": \"Название Вашей компании\",
        \"type\": \"text\",
        \"variables\": [
          {
            \"varname\": \"companyName\",
            \"vartitle\": \"Название компании\",
            \"next\": {
              \"name\": \"fieldOfActivity\",
              \"title\": \"Сфера деятельности\",
              \"type\": \"text\",
              \"variables\": [
                {
                  \"varname\": \"fieldOfActivity\",
                  \"vartitle\": \"Сфера деятельности\",
                  \"next\": {
                    \"name\": \"yourCity\",
                    \"title\": \"В каком городе работает компания\",
                    \"type\": \"text\",
                    \"variables\": [
                      {
                        \"varname\": \"yourCity\",
                        \"vartitle\": \" Город\",
                        \"next\": {
                          \"name\": \"haveSite\",
                          \"title\": \"Есть ли у Вас сайт?\",
                          \"type\": \"radios\",
                          \"variables\": [
                            {
                              \"varname\": \"yes\",
                              \"vartitle\": \"Да\",
                              \"next\": {
                                \"name\": \"haveSocial\",
                                \"title\": \"Есть ли соц. сети у Вашей компании?\",
                                \"type\": \"radios\",
                                \"variables\": [
                                  {
                                    \"varname\": \"yes\",
                                    \"vartitle\": \"Да\",
                                    \"next\": {
                                      \"name\": \"yourСompetitors\",
                                      \"title\": \"Кто Ваши конкуренты\",
                                      \"type\": \"textarea\",
                                      \"variables\": [
                                        {
                                          \"varname\": \"yourСompetitors\",
                                          \"vartitle\": \"Кто Ваши конкуренты\",
                                          \"next\": null
                                        }
                                      ]
                                    }
                                  },
                                  {
                                    \"varname\": \"no\",
                                    \"vartitle\": \"Нет\",
                                    \"next\": {
                                      \"name\": \"yourСompetitors\",
                                      \"title\": \"Кто Ваши конкуренты\",
                                      \"type\": \"textarea\",
                                      \"variables\": null
                                    }
                                  }
                                ]
                              }
                            },
                            {
                              \"varname\": \"no\",
                              \"vartitle\": \"Нет\",
                              \"next\": {
                                \"name\": \"haveSocial\",
                                \"title\": \"Есть ли соц. сети у Вашей компании?\",
                                \"type\": \"radios\",
                                \"variables\": [
                                  {
                                    \"varname\": \"yes\",
                                    \"vartitle\": \"Да\",
                                    \"next\": {
                                      \"name\": \"yourСompetitors\",
                                      \"title\": \"Кто Ваши конкуренты\",
                                      \"type\": \"textarea\",
                                      \"variables\": [
                                        {
                                          \"varname\": \"yourСompetitors\",
                                          \"vartitle\": \"Кто Ваши конкуренты\",
                                          \"next\": null
                                        }
                                      ]
                                    }
                                  },
                                  {
                                    \"varname\": \"no\",
                                    \"vartitle\": \"Нет\",
                                    \"next\": {
                                      \"name\": \"yourСompetitors\",
                                      \"title\": \"Кто Ваши конкуренты\",
                                      \"type\": \"textarea\",
                                      \"variables\": [
                                        {
                                          \"varname\": \"yourСompetitors\",
                                          \"vartitle\": \"Кто Ваши конкуренты\",
                                          \"next\": null
                                        }
                                      ]
                                    }
                                  }
                                ]
                              }
                            }
                          ]
                        }
                      }
                    ]
                  }
                }
              ]
            }
          }
        ]
      }
    },
    {
      \"varname\": \"lead-social\",
      \"vartitle\": \"Вести социальные сети\",
      \"next\": {
        \"name\": \"companyName\",
        \"title\": \"Название Вашей компании\",
        \"type\": \"text\",
        \"variables\": [
          {
            \"varname\": \"companyName\",
            \"vartitle\": \"Название компании\",
            \"next\": {
              \"name\": \"fieldOfActivity\",
              \"title\": \"Сфера деятельности\",
              \"type\": \"text\",
              \"variables\": [
                {
                  \"varname\": \"fieldOfActivity\",
                  \"vartitle\": \"Сфера деятельности\",
                  \"next\": {
                    \"name\": \"yourCity\",
                    \"title\": \"В каком городе работает компания\",
                    \"type\": \"text\",
                    \"variables\": [
                      {
                        \"varname\": \"yourCity\",
                        \"vartitle\": \" Город\",
                        \"next\": {
                          \"name\": \"whichSocial\",
                          \"title\": \"Какие соц. сети вы бы хотели вести\",
                          \"type\": \"text\",
                          \"variables\": [
                            {
                              \"varname\": \"whichSocial\",
                              \"vartitle\": \"Какие соц. сети вы бы хотели вести\",
                              \"next\": {
                                \"name\": \"yourСompetitors\",
                                \"title\": \"Кто Ваши конкуренты\",
                                \"type\": \"textarea\",
                                \"variables\": [
                                  {
                                    \"varname\": \"yourСompetitors\",
                                    \"vartitle\": \"Кто Ваши конкуренты\",
                                    \"next\": null
                                  }
                                ]
                              }
                            }
                          ]
                        }
                      }
                    ]
                  }
                }
              ]
            }
          }
        ]
      }
    },
    {
      \"varname\": \"branding\",
      \"vartitle\": \"Брендинг\",
      \"next\": {
        \"name\": \"companyName\",
        \"title\": \"Название Вашей компании\",
        \"type\": \"text\",
        \"variables\": [
          {
            \"varname\": \"companyName\",
            \"vartitle\": \"Название компании\",
            \"next\": {
              \"name\": \"fieldOfActivity\",
              \"title\": \"Сфера деятельности\",
              \"type\": \"text\",
              \"variables\": [
                {
                  \"varname\": \"fieldOfActivity\",
                  \"vartitle\": \"Сфера деятельности\",
                  \"next\": {
                    \"name\": \"yourCity\",
                    \"title\": \"В каком городе работает компания\",
                    \"type\": \"text\",
                    \"variables\": [
                      {
                        \"varname\": \"yourCity\",
                        \"vartitle\": \" Город\",
                        \"next\": {
                          \"name\": \"newOrRenew\",
                          \"title\": \"Нужно сделать редизайн существующего бренда или создать новый?\",
                          \"type\": \"radios\",
                          \"variables\": [
                            {
                              \"varname\": \"Renew\",
                              \"vartitle\": \"Редизайн существующего\",
                              \"next\": {
                                \"name\": \"haveSite\",
                                \"title\": \"Есть ли у Вас сайт?\",
                                \"type\": \"radios\",
                                \"variables\": [
                                  {
                                    \"varname\": \"yes\",
                                    \"vartitle\": \"Да\",
                                    \"next\": {
                                      \"name\": \"yourСompetitors\",
                                      \"title\": \"Кто Ваши конкуренты\",
                                      \"type\": \"textarea\",
                                      \"variables\": [
                                        {
                                          \"varname\": \"yourСompetitors\",
                                          \"vartitle\": \"Кто Ваши конкуренты\",
                                          \"next\": {
                                            \"name\": \"benefits\",
                                            \"title\": \"Чем отличается Ваш бренд от других?\",
                                            \"type\": \"textarea\",
                                            \"variables\": [
                                              {
                                                \"varname\": \"benefits\",
                                                \"vartitle\": \"Чем отличается Ваш бренд от других?\",
                                                \"next\": null
                                              }
                                            ]
                                          }
                                        }
                                      ]
                                    }
                                  },
                                  {
                                    \"varname\": \"no\",
                                    \"vartitle\": \"Нет\",
                                    \"next\": {
                                      \"name\": \"yourСompetitors\",
                                      \"title\": \"Кто Ваши конкуренты\",
                                      \"type\": \"textarea\",
                                      \"variables\": [
                                        {
                                          \"varname\": \"yourСompetitors\",
                                          \"vartitle\": \"Кто Ваши конкуренты\",
                                          \"next\": {
                                            \"name\": \"benefits\",
                                            \"title\": \"Чем отличается Ваш бренд от других?\",
                                            \"type\": \"textarea\",
                                            \"variables\": [
                                              {
                                                \"varname\": \"benefits\",
                                                \"vartitle\": \"Чем отличается Ваш бренд от других?\",
                                                \"next\": null
                                              }
                                            ]
                                          }
                                        }
                                      ]
                                    }
                                  }
                                ]
                              }
                            },
                            {
                              \"varname\": \"new\",
                              \"vartitle\": \"Создать новый\",
                              \"next\": {
                                \"name\": \"haveSite\",
                                \"title\": \"Есть ли у Вас сайт?\",
                                \"type\": \"radios\",
                                \"variables\": [
                                  {
                                    \"varname\": \"yes\",
                                    \"vartitle\": \"Да\",
                                    \"next\": {
                                      \"name\": \"yourСompetitors\",
                                      \"title\": \"Кто Ваши конкуренты\",
                                      \"type\": \"textarea\",
                                      \"variables\": [
                                        {
                                          \"varname\": \"yourСompetitors\",
                                          \"vartitle\": \"Кто Ваши конкуренты\",
                                          \"next\": {
                                            \"name\": \"benefits\",
                                            \"title\": \"Чем отличается Ваш бренд от других?\",
                                            \"type\": \"textarea\",
                                            \"variables\": [
                                              {
                                                \"varname\": \"benefits\",
                                                \"vartitle\": \"Чем отличается Ваш бренд от других?\",
                                                \"next\": null
                                              }
                                            ]
                                          }
                                        }
                                      ]
                                    }
                                  },
                                  {
                                    \"varname\": \"no\",
                                    \"vartitle\": \"Нет\",
                                    \"next\": {
                                      \"name\": \"yourСompetitors\",
                                      \"title\": \"Кто Ваши конкуренты\",
                                      \"type\": \"textarea\",
                                      \"variables\": [
                                        {
                                          \"varname\": \"yourСompetitors\",
                                          \"vartitle\": \"Кто Ваши конкуренты\",
                                          \"next\": {
                                            \"name\": \"benefits\",
                                            \"title\": \"Чем отличается Ваш бренд от других?\",
                                            \"type\": \"textarea\",
                                            \"variables\": [
                                              {
                                                \"varname\": \"benefits\",
                                                \"vartitle\": \"Чем отличается Ваш бренд от других?\",
                                                \"next\": null
                                              }
                                            ]
                                          }
                                        }
                                      ]
                                    }
                                  }
                                ]
                              }
                            }
                          ]
                        }
                      }
                    ]
                  }
                }
              ]
            }
          }
        ]
      }
    }
  ]
}";


function buildTree($question, $deep){
    bd($deep);
    $prefix = "";
    for ($i=0; $i<$deep; $i++){
        $prefix .= "-";
    }
    echo  $prefix . "<a href='#'>" . " " . $question->title . "</a><br/>";
    foreach ($question->variables as $variable) {
        if ($variable->next != null) {
            buildTree($variable->next, $deep + 3);
        }
    }
}

$briefs = json_decode($json);
buildTree($briefs, 0);