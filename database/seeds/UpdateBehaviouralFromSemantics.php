<?php

use Illuminate\Database\Seeder;

class UpdateBehaviouralFromSemantics extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //H5P.ThreeImage-0.3
        $h5pThreeImageLibParams = ['name' => "H5P.ThreeImage", "major_version" =>0, "minor_version" => 3];
        $h5pThreeImageLib = DB::table('h5p_libraries')->where($h5pThreeImageLibParams)->first();
        if ($h5pThreeImageLib) {
            DB::table('h5p_libraries')->where($h5pThreeImageLibParams)->update([
                'semantics' => $this->updatedThreeImageSemantics()
            ]);
        }

        //H5P.TrueFalse-1.8
        $h5pTrueFalseLibParams = ['name' => "H5P.TrueFalse", "major_version" =>1, "minor_version" => 8];
        $h5pTrueFalseLib = DB::table('h5p_libraries')->where($h5pTrueFalseLibParams)->first();
        if ($h5pTrueFalseLib) {
            DB::table('h5p_libraries')->where($h5pTrueFalseLibParams)->update([
                'semantics' => $this->updatedTrueFalseSemantics()
            ]);
        }
        
        //H5P.SingleChoiceSet-1.11
        $h5pSingleChoiceSetLibParams = ['name' => "H5P.SingleChoiceSet", "major_version" =>1, "minor_version" => 11];
        $h5pSingleChoiceSetLib = DB::table('h5p_libraries')->where($h5pSingleChoiceSetLibParams)->first();
        if ($h5pSingleChoiceSetLib) {
            DB::table('h5p_libraries')->where($h5pSingleChoiceSetLibParams)->update([
                'semantics' => $this->updatedSingleChoiceSetSemantics()
            ]);
        }

        //H5P.MemoryGame-1.3
        $h5pMemoryGameLibParams = ['name' => "H5P.MemoryGame", "major_version" =>1, "minor_version" => 3];
        $h5pMemoryGameLib = DB::table('h5p_libraries')->where($h5pMemoryGameLibParams)->first();
        if ($h5pMemoryGameLib) {
            DB::table('h5p_libraries')->where($h5pMemoryGameLibParams)->update([
                'semantics' => $this->updatedMemoryGameSemantics()
            ]);
        }

        //H5P.MarkTheWords-1.11
        $h5pMarkTheWordsLibParams = ['name' => "H5P.MarkTheWords", "major_version" =>1, "minor_version" => 11];
        $h5pMarkTheWordsLib = DB::table('h5p_libraries')->where($h5pMarkTheWordsLibParams)->first();
        if ($h5pMarkTheWordsLib) {
            DB::table('h5p_libraries')->where($h5pMarkTheWordsLibParams)->update([
                'semantics' => $this->updatedMarkTheWordsSemantics()
            ]);
        }


        //H5P.ImageSequencing-1.1
        $h5pImageSequencingLibParams = ['name' => "H5P.ImageSequencing", "major_version" =>1, "minor_version" => 1];
        $h5pImageSequencingLib = DB::table('h5p_libraries')->where($h5pImageSequencingLibParams)->first();
        if ($h5pImageSequencingLib) {
            DB::table('h5p_libraries')->where($h5pImageSequencingLibParams)->update([
                'semantics' => $this->updatedImageSequencingSemantics()
            ]);
        }

         //H5P.ImagePair-1.4
         $h5pImagePairLibParams = ['name' => "H5P.ImagePair", "major_version" =>1, "minor_version" => 4];
         $h5pImagePairLib = DB::table('h5p_libraries')->where($h5pImagePairLibParams)->first();
         if ($h5pImagePairLib) {
             DB::table('h5p_libraries')->where($h5pImagePairLibParams)->update([
                 'semantics' => $this->updatedImagePairSemantics()
             ]);
         }

         //H5P.DragQuestion-1.14
         $h5pDragQuestionLibParams = ['name' => "H5P.DragQuestion", "major_version" =>1, "minor_version" => 14];
         $h5pDragQuestionLib = DB::table('h5p_libraries')->where($h5pDragQuestionLibParams)->first();
         if ($h5pDragQuestionLib) {
             DB::table('h5p_libraries')->where($h5pDragQuestionLibParams)->update([
                 'semantics' => $this->updatedDragQuestionSemantics()
             ]);
         }

         //H5P.InteractiveVideo-1.22
         $h5pInteractiveVideoLibParams = ['name' => "H5P.InteractiveVideo", "major_version" =>1, "minor_version" => 22];
         $h5pInteractiveVideoLib = DB::table('h5p_libraries')->where($h5pInteractiveVideoLibParams)->first();
         if ($h5pInteractiveVideoLib) {
             DB::table('h5p_libraries')->where($h5pInteractiveVideoLibParams)->update([
                 'semantics' => $this->updatedInteractiveVideoSemantics()
             ]);
         }

         //H5P.CoursePresentation-1.22
         $h5pCoursePresentationLibParams = ['name' => "H5P.CoursePresentation", "major_version" =>1, "minor_version" => 22];
         $h5pCoursePresentationLib = DB::table('h5p_libraries')->where($h5pCoursePresentationLibParams)->first();
         if ($h5pCoursePresentationLib) {
             DB::table('h5p_libraries')->where($h5pCoursePresentationLibParams)->update([
                 'semantics' => $this->updatedCoursePresentationSemantics()
             ]);
         }



         //New

        //H5P.Blanks-1.14
         $h5pBlanksLibParams = ['name' => "H5P.Blanks", "major_version" =>1, "minor_version" => 14];
         $h5pBlanksLib = DB::table('h5p_libraries')->where($h5pBlanksLibParams)->first();
         if ($h5pBlanksLib) {
             DB::table('h5p_libraries')->where($h5pBlanksLibParams)->update([
                 'semantics' => $this->updatedBlanksSemantics()
             ]);
         }

       //H5P.AdvancedBlanks-1.0
       $h5pAdvancedBlanksLibParams = ['name' => "H5P.AdvancedBlanks", "major_version" =>1, "minor_version" => 0];
       $h5pAdvancedBlanksLib = DB::table('h5p_libraries')->where($h5pAdvancedBlanksLibParams)->first();
       if ($h5pAdvancedBlanksLib) {
           DB::table('h5p_libraries')->where($h5pAdvancedBlanksLibParams)->update([
               'semantics' => $this->updatedAdvancedBlanksSemantics()
           ]);
       }

         //H5P.Agamotto-1.5
         $h5pAgamottoLibParams = ['name' => "H5P.Agamotto", "major_version" =>1, "minor_version" => 5];
         $h5pAgamottoLib = DB::table('h5p_libraries')->where($h5pAgamottoLibParams)->first();
         if ($h5pAgamottoLib) {
             DB::table('h5p_libraries')->where($h5pAgamottoLibParams)->update([
                 'semantics' => $this->updatedAgamottoSemantics()
             ]);
         }

         //H5P.Dialogcards-1.8
         $h5pDialogcardsLibParams = ['name' => "H5P.Dialogcards", "major_version" =>1, "minor_version" => 8];
         $h5pDialogcardsLib = DB::table('h5p_libraries')->where($h5pDialogcardsLibParams)->first();
         if ($h5pDialogcardsLib) {
             DB::table('h5p_libraries')->where($h5pDialogcardsLibParams)->update([
                 'semantics' => $this->updatedDialogcardsSemantics()
             ]);
         }  

        //H5P.Dictation-1.0
        $h5pDictationLibParams = ['name' => "H5P.Dictation", "major_version" =>1, "minor_version" => 0];
        $h5pDictationLib = DB::table('h5p_libraries')->where($h5pDictationLibParams)->first();
        if ($h5pDictationLib) {
            DB::table('h5p_libraries')->where($h5pDictationLibParams)->update([
                'semantics' => $this->updatedDictationSemantics()
            ]);
        }  

        //H5P.DragText-1.8
        $h5pDragTextLibParams = ['name' => "H5P.DragText", "major_version" =>1, "minor_version" => 8];
        $h5pDragTextLib = DB::table('h5p_libraries')->where($h5pDragTextLibParams)->first();
        if ($h5pDragTextLib) {
            DB::table('h5p_libraries')->where($h5pDragTextLibParams)->update([
                'semantics' => $this->updatedDragTextSemantics()
            ]);
        }  

        //H5P.Essay-1.2
        $h5pEssayLibParams = ['name' => "H5P.Essay", "major_version" =>1, "minor_version" => 2];
        $h5pEssayLib = DB::table('h5p_libraries')->where($h5pEssayLibParams)->first();
        if ($h5pEssayLib) {
            DB::table('h5p_libraries')->where($h5pEssayLibParams)->update([
                'semantics' => $this->updatedEssaySemantics()
            ]);
        }  

        //H5P.ImageJuxtaposition-1.4
        $h5pImageJuxtapositionLibParams = ['name' => "H5P.ImageJuxtaposition", "major_version" =>1, "minor_version" => 4];
        $h5pImageJuxtapositionLib = DB::table('h5p_libraries')->where($h5pImageJuxtapositionLibParams)->first();
        if ($h5pImageJuxtapositionLib) {
            DB::table('h5p_libraries')->where($h5pImageJuxtapositionLibParams)->update([
                'semantics' => $this->updatedImageJuxtapositionSemantics()
            ]);
        }  

         //H5P.InteractiveBook-1.2
         $h5pInteractiveBookLibParams = ['name' => "H5P.InteractiveBook", "major_version" =>1, "minor_version" => 2];
         $h5pInteractiveBookLib = DB::table('h5p_libraries')->where($h5pInteractiveBookLibParams)->first();
         if ($h5pInteractiveBookLib) {
             DB::table('h5p_libraries')->where($h5pInteractiveBookLibParams)->update([
                 'semantics' => $this->updatedInteractiveBookSemantics()
             ]);
         } 

          //H5P.BrightcoveInteractiveVideo-1.0
          $h5pBrightcoveInteractiveVideoLibParams = ['name' => "H5P.BrightcoveInteractiveVideo", "major_version" =>1, "minor_version" => 0];
          $h5pBrightcoveInteractiveVideoLib = DB::table('h5p_libraries')->where($h5pBrightcoveInteractiveVideoLibParams)->first();
          if ($h5pBrightcoveInteractiveVideoLib) {
              DB::table('h5p_libraries')->where($h5pBrightcoveInteractiveVideoLibParams)->update([
                  'semantics' => $this->updatedBrightcoveInteractiveVideoSemantics()
              ]);
          } 

        //H5P.CurrikiInteractiveVideo-1.0
        $h5pCurrikiInteractiveVideoLibParams = ['name' => "H5P.CurrikiInteractiveVideo", "major_version" =>1, "minor_version" => 0];
        $h5pCurrikiInteractiveVideoLib = DB::table('h5p_libraries')->where($h5pCurrikiInteractiveVideoLibParams)->first();
        if ($h5pCurrikiInteractiveVideoLib) {
            DB::table('h5p_libraries')->where($h5pCurrikiInteractiveVideoLibParams)->update([
                'semantics' => $this->updatedCurrikiInteractiveVideoSemantics()
            ]);
        } 
    }

    //H5P.ThreeImage-0.3
    private function updatedThreeImageSemantics() {
        return '[
            {
              "name": "threeImage",
              "type": "group",
              "widget": "threeImage",
              "label": "Three Image Editor",
              "importance": "high",
              "fields": [
                {
                  "name": "scenes",
                  "type": "list",
                  "label": "Scenes",
                  "entity": "Scene",
                  "min": 0,
                  "field": {
                    "name": "scene",
                    "type": "group",
                    "fields": [
                      {
                        "name": "sceneType",
                        "type": "select",
                        "label": "Scene type",
                        "widget": "radioGroup",
                        "alignment": "horizontal",
                        "options": [
                          {
                            "value": "360",
                            "label": "360 image"
                          },
                          {
                            "value": "static",
                            "label": "Static image"
                          }
                        ],
                        "default": "360"
                      },
                      {
                        "name": "showBackButton",
                        "type": "boolean",
                        "label": "Display \"Back\" button",
                        "description": "Display button for navigating back to your previous scene",
                        "default": true,
                        "widget": "showWhen",
                        "showWhen": {
                          "rules": [
                            {
                              "field": "sceneType",
                              "equals": "static"
                            }
                          ]
                        }
                      },
                      {
                        "name": "sceneId",
                        "type": "number",
                        "label": "Unique scene id",
                        "description": "Must be unique, used for navigation between scenes"
                      },
                      {
                        "name": "scenename",
                        "type": "text",
                        "label": "Scene Title",
                        "description": "Used to identify the scene for authors"
                      },
                      {
                        "name": "scenesrc",
                        "type": "image",
                        "label": "Scene Background"
                      },
                      {
                        "name": "scenedescription",
                        "type": "text",
                        "widget": "html",
                        "label": "Scene Description",
                        "description": "A text that can describe the scene for the end-user",
                        "optional": true,
                        "tags": [
                          "p",
                          "br",
                          "strong",
                          "em",
                          "code"
                        ]
                      },
                      {
                        "name": "cameraStartPosition",
                        "type": "text",
                        "label": "Initial camera position",
                        "description": "Camera position in pitch and yaw"
                      },
                      {
                        "name": "interactions",
                        "type": "list",
                        "label": "Interactions",
                        "entity": "Interaction",
                        "min": 0,
                        "field": {
                          "name": "interaction",
                          "type": "group",
                          "fields": [
                            {
                              "name": "action",
                              "type": "library",
                              "label": "Interaction",
                              "description": "Hotspot with an interaction",
                              "options": [
                                "H5P.GoToScene 0.1",
                                "H5P.AdvancedText 1.1",
                                "H5P.Image 1.1",
                                "H5P.Audio 1.4",
                                "H5P.Video 1.5",
                                "H5P.Summary 1.10",
                                "H5P.SingleChoiceSet 1.11"
                              ]
                            },
                            {
                              "name": "interactionpos",
                              "type": "text",
                              "label": "Interaction position",
                              "description": "Interaction position in pitch and yaw"
                            }
                          ]
                        }
                      },
                      {
                        "name": "iconType",
                        "type": "select",
                        "label": "Button style",
                        "description": "Decide how buttons pointing to this scene should look. For scenes that are static and does not lead to new scenes, we recommend the \"More information\" button.",
                        "widget": "radioGroup",
                        "alignment": "horizontal",
                        "options": [
                          {
                            "value": "arrow",
                            "label": "New scene (arrow)"
                          },
                          {
                            "value": "plus",
                            "label": "More information (plus)"
                          }
                        ],
                        "default": "arrow"
                      },
                      {
                        "name": "audio",
                        "type": "audio",
                        "label": "Audio Track",
                        "description": "Add an audio track thats specific for this scene.",
                        "optional": true,
                        "widgetExtensions": [
                          "AudioRecorder"
                        ]
                      }
                    ]
                  }
                },
                {
                  "name": "startSceneId",
                  "type": "number",
                  "label": "Start scene id",
                  "default": 0
                },
                {
                  "name": "audio",
                  "type": "audio",
                  "label": "Audio track",
                  "optional": true
                }
              ]
            },
            {
              "name": "behaviour",
              "type": "group",
              "label": "Behavior settings",
              "importance": "low",
              "description": "These options will let you control how the world behaves.",
              "fields": [
                {
                  "name": "audio",
                  "type": "audio",
                  "label": "Global Audio",
                  "description": "Add an audio track thats available for all of the scenes by default.",
                  "optional": true,
                  "widgetExtensions": [
                    "AudioRecorder"
                  ]
                },
                {
                  "name": "sceneRenderingQuality",
                  "type": "select",
                  "label": "Scene rendering quality",
                  "description": "Choose the amount of width and height segments used to render a scene. This directly affects the quality level of the scene, try increasing the quality if a scene looks \"blocky\" or \"waves\" are seen within the scenes. Note that higher quality rendering takes more time to load.",
                  "options": [
                    {
                      "value": "high",
                      "label": "High Quality (128x128)"
                    },
                    {
                      "value": "medium",
                      "label": "Medium Quality (64x64)"
                    },
                    {
                      "value": "low",
                      "label": "Low Quality (16x16)"
                    }
                  ],
                  "default": "high"
                }
              ]
            }
          ]
          ';
    }
    
    //H5P.TrueFalse-1.6
    private function updatedTrueFalseSemantics() { 
        return '[
          {
            "name": "media",
            "type": "group",
            "label": "Media",
            "importance": "medium",
            "fields": [
              {
                "name": "type",
                "type": "library",
                "label": "Type",
                "importance": "medium",
                "options": [
                  "H5P.Image 1.1",
                  "H5P.Video 1.6",
                  "H5P.Audio 1.5"
                ],
                "optional": true,
                "description": "Optional media to display above the question."
              },
              {
                "name": "disableImageZooming",
                "type": "boolean",
                "label": "Disable image zooming",
                "importance": "low",
                "default": false,
                "optional": true,
                "widget": "showWhen",
                "showWhen": {
                  "rules": [
                    {
                      "field": "type",
                      "equals": "H5P.Image 1.1"
                    }
                  ]
                }
              }
            ]
          },
          {
            "name": "question",
            "type": "text",
            "widget": "html",
            "label": "Question",
            "importance": "high",
            "enterMode": "p",
            "tags": [
              "strong",
              "em",
              "sub",
              "sup",
              "h2",
              "h3",
              "pre",
              "code"
            ]
          },
          {
            "name": "correct",
            "type": "select",
            "widget": "radioGroup",
            "alignment": "horizontal",
            "label": "Correct answer",
            "importance": "high",
            "options": [
              {
                "value": "true",
                "label": "True"
              },
              {
                "value": "false",
                "label": "False"
              }
            ],
            "default": "true"
          },
          {
            "name": "l10n",
            "type": "group",
            "common": true,
            "label": "User interface translations for True/False Questions",
            "importance": "low",
            "fields": [
              {
                "name": "trueText",
                "type": "text",
                "label": "Label for true button",
                "importance": "low",
                "default": "True"
              },
              {
                "name": "falseText",
                "type": "text",
                "label": "Label for false button",
                "importance": "low",
                "default": "False"
              },
              {
                "label": "Text for \"Submit\" button",
                "importance": "low",
                "name": "submitAnswer",
                "type": "text",
                "default": "Submit",
                "optional": true
              },
              {
                "label": "Feedback text",
                "importance": "low",
                "name": "score",
                "type": "text",
                "default": "You got @score of @total points",
                "description": "Feedback text, variables available: @score and @total. Example: You got @score of @total possible points"
              },
              {
                "label": "Text for \"Check\" button",
                "importance": "low",
                "name": "checkAnswer",
                "type": "text",
                "default": "Check"
              },
              {
                "label": "Text for \"Submit\" button",
                "importance": "low",
                "name": "submitAnswer",
                "type": "text",
                "default": "Submit"
              },
              {
                "label": "Text for \"Show solution\" button",
                "importance": "low",
                "name": "showSolutionButton",
                "type": "text",
                "default": "Show solution"
              },
              {
                "label": "Text for \"Retry\" button",
                "importance": "low",
                "name": "tryAgain",
                "type": "text",
                "default": "Retry"
              },
              {
                "name": "wrongAnswerMessage",
                "type": "text",
                "label": "Wrong Answer",
                "importance": "low",
                "default": "Wrong answer"
              },
              {
                "name": "correctAnswerMessage",
                "type": "text",
                "label": "Correct Answer",
                "importance": "low",
                "default": "Correct answer"
              },
              {
                "name": "scoreBarLabel",
                "type": "text",
                "label": "Textual representation of the score bar for those using a readspeaker",
                "default": "You got :num out of :total points",
                "importance": "low"
              },
              {
                "name": "a11yCheck",
                "type": "text",
                "label": "Assistive technology description for \"Check\" button",
                "default": "Check the answers. The responses will be marked as correct, incorrect, or unanswered.",
                "importance": "low"
              },
              {
                "name": "a11yShowSolution",
                "type": "text",
                "label": "Assistive technology description for \"Show Solution\" button",
                "default": "Show the solution. The task will be marked with its correct solution.",
                "importance": "low"
              },
              {
                "name": "a11yRetry",
                "type": "text",
                "label": "Assistive technology description for \"Retry\" button",
                "default": "Retry the task. Reset all responses and start the task over again.",
                "importance": "low"
              }
            ]
          },
          {
            "name": "behaviour",
            "type": "group",
            "label": "Behavior settings",
            "importance": "low",
            "description": "These options will let you control how the task behaves.",
            "fields": [
              {
                "name": "enableRetry",
                "type": "boolean",
                "label": "Enable \"Retry\" button",
                "importance": "low",
                "default": true
              },
              {
                "name": "enableSolutionsButton",
                "type": "boolean",
                "label": "Enable \"Show Solution\" button",
                "importance": "low",
                "default": true
              },
              {
                "name": "enableCheckButton",
                "type": "boolean",
                "label": "Enable \"Check\" button",
                "widget": "none",
                "importance": "low",
                "default": true,
                "optional": true
              },
              {
                "label": "Show confirmation dialog on \"Check\"",
                "importance": "low",
                "name": "confirmCheckDialog",
                "type": "boolean",
                "default": false
              },
              {
                "label": "Show confirmation dialog on \"Retry\"",
                "importance": "low",
                "name": "confirmRetryDialog",
                "type": "boolean",
                "default": false
              },
              {
                "label": "Automatically check answer",
                "importance": "low",
                "description": "Note that accessibility will suffer if enabling this option",
                "name": "autoCheck",
                "type": "boolean",
                "default": false
              },
              {
                "name": "feedbackOnCorrect",
                "label": "Feedback on correct answer",
                "importance": "low",
                "description": "This will override the default feedback text. Variables available: @score and @total",
                "type": "text",
                "maxLength": 2048,
                "optional": true
              },
              {
                "name": "feedbackOnWrong",
                "label": "Feedback on wrong answer",
                "importance": "low",
                "description": "This will override the default feedback text. Variables available: @score and @total",
                "type": "text",
                "maxLength": 2048,
                "optional": true
              }
            ]
          },
          {
            "name": "currikisettings",
            "type": "group",
            "label": "Curriki settings",
            "importance": "low",
            "description": "These options will let you control how the curriki studio behaves.",
            "optional": true,
            "fields": [
              {
                "label": "Do not Show Submit Button",
                "importance": "low",
                "name": "disableSubmitButton",
                "type": "boolean",
                "default": false,
                "optional": true,
                "description": "This option only applies to a standalone activity. The Submit button is required for grade passback to an LMS."
              },
              {
                "label": "Placeholder",
                "importance": "low",
                "name": "placeholder",
                "type": "boolean",
                "default": false,
                "optional": true,
                "description": "This option is a place holder. will be used in future"
              },
              {
                "label": "Curriki Localization",
                "description": "Here you can edit settings or translate texts used in curriki settings",
                "importance": "low",
                "name": "currikil10n",
                "type": "group",
                "fields": [
                  {
                    "label": "Text for \"Submit\" button",
                    "name": "submitAnswer",
                    "type": "text",
                    "default": "Submit",
                    "optional": true
                  },
                  {
                    "label": "Text for \"Placeholder\" button",
                    "importance": "low",
                    "name": "placeholderButton",
                    "type": "text",
                    "default": "Placeholder",
                    "optional": true
                  }
                ]
              }
            ]
          },
          {
            "label": "Check confirmation dialog",
            "importance": "low",
            "name": "confirmCheck",
            "type": "group",
            "common": true,
            "fields": [
              {
                "label": "Header text",
                "importance": "low",
                "name": "header",
                "type": "text",
                "default": "Finish ?"
              },
              {
                "label": "Body text",
                "importance": "low",
                "name": "body",
                "type": "text",
                "default": "Are you sure you wish to finish ?",
                "widget": "html",
                "enterMode": "p",
                "tags": [
                  "strong",
                  "em",
                  "del",
                  "u",
                  "code"
                ]
              },
              {
                "label": "Cancel button label",
                "importance": "low",
                "name": "cancelLabel",
                "type": "text",
                "default": "Cancel"
              },
              {
                "label": "Confirm button label",
                "importance": "low",
                "name": "confirmLabel",
                "type": "text",
                "default": "Finish"
              }
            ]
          },
          {
            "label": "Retry confirmation dialog",
            "importance": "low",
            "name": "confirmRetry",
            "type": "group",
            "common": true,
            "fields": [
              {
                "label": "Header text",
                "importance": "low",
                "name": "header",
                "type": "text",
                "default": "Retry ?"
              },
              {
                "label": "Body text",
                "importance": "low",
                "name": "body",
                "type": "text",
                "default": "Are you sure you wish to retry ?",
                "widget": "html",
                "enterMode": "p",
                "tags": [
                  "strong",
                  "em",
                  "del",
                  "u",
                  "code"
                ]
              },
              {
                "label": "Cancel button label",
                "importance": "low",
                "name": "cancelLabel",
                "type": "text",
                "default": "Cancel"
              },
              {
                "label": "Confirm button label",
                "importance": "low",
                "name": "confirmLabel",
                "type": "text",
                "default": "Confirm"
              }
            ]
          }
        ]      
          ';
    }

    //H5P.SingleChoiceSet-1.11
    private function updatedSingleChoiceSetSemantics() { 
        return '[
            {
              "name": "choices",
              "type": "list",
              "label": "List of questions",
              "importance": "high",
              "entity": "question",
              "min": 1,
              "defaultNum": 2,
              "widgets": [
                {
                  "name": "ListEditor",
                  "label": "Default"
                },
                {
                  "name": "SingleChoiceSetTextualEditor",
                  "label": "Textual"
                }
              ],
              "field": {
                "name": "choice",
                "type": "group",
                "isSubContent": true,
                "label": "Question & alternatives",
                "importance": "high",
                "fields": [
                  {
                    "name": "question",
                    "type": "text",
                    "widget": "html",
                    "tags": [
                      "p",
                      "br",
                      "strong",
                      "em",
                      "code"
                    ],
                    "label": "Question",
                    "importance": "high"
                  },
                  {
                    "name": "answers",
                    "type": "list",
                    "label": "Alternatives - first alternative is the correct one.",
                    "importance": "medium",
                    "entity": "answer",
                    "min": 2,
                    "max": 4,
                    "defaultNum": 2,
                    "field": {
                      "name": "answer",
                      "type": "text",
                      "widget": "html",
                      "tags": [
                        "p",
                        "br",
                        "strong",
                        "em",
                        "code"
                      ],
                      "label": "Alternative",
                      "importance": "medium"
                    }
                  }
                ]
              }
            },
            {
              "name": "overallFeedback",
              "type": "group",
              "label": "Overall Feedback",
              "importance": "low",
              "expanded": true,
              "fields": [
                {
                  "name": "overallFeedback",
                  "type": "list",
                  "widgets": [
                    {
                      "name": "RangeList",
                      "label": "Default"
                    }
                  ],
                  "importance": "high",
                  "label": "Define custom feedback for any score range",
                  "description": "Click the \"Add range\" button to add as many ranges as you need. Example: 0-20% Bad score, 21-91% Average Score, 91-100% Great Score!",
                  "entity": "range",
                  "min": 1,
                  "defaultNum": 1,
                  "optional": true,
                  "field": {
                    "name": "overallFeedback",
                    "type": "group",
                    "importance": "low",
                    "fields": [
                      {
                        "name": "from",
                        "type": "number",
                        "label": "Score Range",
                        "min": 0,
                        "max": 100,
                        "default": 0,
                        "unit": "%"
                      },
                      {
                        "name": "to",
                        "type": "number",
                        "min": 0,
                        "max": 100,
                        "default": 100,
                        "unit": "%"
                      },
                      {
                        "name": "feedback",
                        "type": "text",
                        "label": "Feedback for defined score range",
                        "importance": "low",
                        "placeholder": "Fill in the feedback",
                        "optional": true
                      }
                    ]
                  }
                }
              ]
            },
            {
              "name": "behaviour",
              "type": "group",
              "label": "Behavior settings",
              "importance": "low",
              "fields": [
                {
                  "name": "autoContinue",
                  "type": "boolean",
                  "label": "Auto continue",
                  "description": "Automatically go to next question when alternative is selected",
                  "default": true
                },
                {
                  "name": "timeoutCorrect",
                  "type": "number",
                  "label": "Timeout on correct answers",
                  "importance": "low",
                  "description": "Value in milliseconds",
                  "default": 2000,
                  "widget": "showWhen",
                  "showWhen": {
                    "rules": [
                      {
                        "field": "autoContinue",
                        "equals": true
                      }
                    ]
                  }
                },
                {
                  "name": "timeoutWrong",
                  "type": "number",
                  "label": "Timeout on wrong answers",
                  "importance": "low",
                  "description": "Value in milliseconds",
                  "default": 3000,
                  "widget": "showWhen",
                  "showWhen": {
                    "rules": [
                      {
                        "field": "autoContinue",
                        "equals": true
                      }
                    ]
                  }
                },
                {
                  "name": "soundEffectsEnabled",
                  "type": "boolean",
                  "label": "Enable sound effects",
                  "importance": "low",
                  "default": true
                },
                {
                  "name": "enableRetry",
                  "type": "boolean",
                  "label": "Enable retry button",
                  "importance": "low",
                  "default": true
                },
                {
                  "name": "enableSolutionsButton",
                  "type": "boolean",
                  "label": "Enable show solution button",
                  "importance": "low",
                  "default": true
                },
                {
                  "name": "passPercentage",
                  "type": "number",
                  "label": "Pass percentage",
                  "description": "Percentage of Total score required for passing the quiz.",
                  "min": 0,
                  "max": 100,
                  "step": 1,
                  "default": 100
                }
              ]
            },
            {
              "name": "currikisettings",
              "type": "group",
              "label": "Curriki settings",
              "importance": "low",
              "description": "These options will let you control how the curriki studio behaves.",
              "optional": true,
              "fields": [
                {
                  "label": "Do not Show Submit Button",
                  "importance": "low",
                  "name": "disableSubmitButton",
                  "type": "boolean",
                  "default": false,
                  "optional": true,
                  "description": "This option only applies to a standalone activity. The Submit button is required for grade passback to an LMS."
                },
                {
                  "label": "Placeholder",
                  "importance": "low",
                  "name": "placeholder",
                  "type": "boolean",
                  "default": false,
                  "optional": true,
                  "description": "This option is a place holder. will be used in future"
                },
                {
                  "label": "Curriki Localization",
                  "description": "Here you can edit settings or translate texts used in curriki settings",
                  "importance": "low",
                  "name": "currikil10n",
                  "type": "group",
                  "fields": [
                    {
                      "label": "Text for \"Submit\" button",
                      "name": "submitAnswer",
                      "type": "text",
                      "default": "Submit",
                      "optional": true
                    },
                    {
                      "label": "Text for \"Placeholder\" button",
                      "importance": "low",
                      "name": "placeholderButton",
                      "type": "text",
                      "default": "Placeholder",
                      "optional": true
                    }
                  ]
                }
              ]
            },
            {
              "name": "l10n",
              "type": "group",
              "label": "Localize single choice set",
              "importance": "low",
              "common": true,
              "fields": [
                {
                  "name": "nextButtonLabel",
                  "type": "text",
                  "label": "Label for the \"Next\" button",
                  "importance": "low",
                  "default": "Next question"
                },
                {
                  "name": "showSolutionButtonLabel",
                  "type": "text",
                  "label": "Label for the \"Show solution\" button",
                  "importance": "low",
                  "default": "Show solution"
                },
                {
                  "name": "retryButtonLabel",
                  "type": "text",
                  "label": "Label for the \"Retry\" button",
                  "importance": "low",
                  "default": "Retry"
                },
                {
                  "name": "solutionViewTitle",
                  "type": "text",
                  "label": "Title for the show solution view",
                  "importance": "low",
                  "default": "Solution list"
                },
                {
                  "name": "correctText",
                  "type": "text",
                  "label": "Readspeaker text for correct answer",
                  "importance": "low",
                  "default": "Correct!"
                },
                {
                  "name": "incorrectText",
                  "type": "text",
                  "label": "Readspeaker text for incorrect answer",
                  "importance": "low",
                  "default": "Incorrect!"
                },
                {
                  "name": "muteButtonLabel",
                  "type": "text",
                  "label": "Label for the \"mute\" button, to disable feedback sound",
                  "importance": "low",
                  "default": "Mute feedback sound"
                },
                {
                  "name": "closeButtonLabel",
                  "type": "text",
                  "label": "Label for the \"Close\" button",
                  "importance": "low",
                  "default": "Close"
                },
                {
                  "name": "slideOfTotal",
                  "type": "text",
                  "label": "Slide number text",
                  "importance": "low",
                  "description": "Announces current slide and total number of slides, variables are :num and :total",
                  "default": "Slide :num of :total"
                },
                {
                  "name": "scoreBarLabel",
                  "type": "text",
                  "label": "Textual representation of the score bar for those using a readspeaker",
                  "default": "You got :num out of :total points",
                  "importance": "low"
                },
                {
                  "name": "solutionListQuestionNumber",
                  "type": "text",
                  "label": "Label for the question number in the solution list",
                  "importance": "low",
                  "description": "Announces current question index in solution list, variables are :num",
                  "default": "Question :num"
                },
                
                {
                  "name": "a11yShowSolution",
                  "type": "text",
                  "label": "Assistive technology description for \"Show Solution\" button",
                  "default": "Show the solution. The task will be marked with its correct solution.",
                  "importance": "low"
                },
                {
                  "name": "a11yRetry",
                  "type": "text",
                  "label": "Assistive technology description for \"Retry\" button",
                  "default": "Retry the task. Reset all responses and start the task over again.",
                  "importance": "low"
                }
              ]
            }
          ]';
    }

    //H5P.MemoryGame-1.3
    private function updatedMemoryGameSemantics() { 
        return '[
            {
              "name": "cards",
              "type": "list",
              "widgets": [
                {
                  "name": "VerticalTabs",
                  "label": "Default"
                }
              ],
              "label": "Cards",
              "importance": "high",
              "entity": "card",
              "min": 2,
              "max": 100,
              "field": {
                "type": "group",
                "name": "card",
                "label": "Card",
                "importance": "high",
                "fields": [
                  {
                    "name": "image",
                    "type": "image",
                    "label": "Image",
                    "importance": "high",
                    "ratio": 1
                  },
                  {
                    "name": "imageAlt",
                    "type": "text",
                    "label": "Alternative text for Image",
                    "importance": "high",
                    "description": "Describe what can be seen in the photo. The text is read by text-to-speech tools needed by visually impaired users."
                  },
                  {
                    "name": "audio",
                    "type": "audio",
                    "importance": "high",
                    "label": "Audio Track",
                    "description": "An optional sound that plays when the card is turned.",
                    "optional": true,
                    "widgetExtensions": ["AudioRecorder"]
                  },
                  {
                    "name": "match",
                    "type": "image",
                    "label": "Matching Image",
                    "importance": "low",
                    "optional": true,
                    "description": "An optional image to match against instead of using two cards with the same image.",
                    "ratio": 1
                  },
                  {
                    "name": "matchAlt",
                    "type": "text",
                    "label": "Alternative text for Matching Image",
                    "importance": "low",
                    "optional": true,
                    "description": "Describe what can be seen in the photo. The text is read by text-to-speech tools needed by visually impaired users."
                  },
                  {
                    "name": "matchAudio",
                    "type": "audio",
                    "importance": "low",
                    "label": "Matching Audio Track",
                    "description": "An optional sound that plays when the second card is turned.",
                    "optional": true,
                    "widgetExtensions": ["AudioRecorder"]
                  },
                  {
                    "name": "description",
                    "type": "text",
                    "label": "Description",
                    "importance": "low",
                    "maxLength": 150,
                    "optional": true,
                    "description": "An optional short text that will pop up once the two matching cards are found."
                  }
                ]
              }
            },
            {
              "name": "behaviour",
              "type": "group",
              "label": "Behavior settings",
              "importance": "low",
              "description": "These options will let you control how the game behaves.",
              "optional": true,
              "fields": [
                {
                  "name": "useGrid",
                  "type": "boolean",
                  "label": "Position the cards in a square",
                  "description": "Will try to match the number of columns and rows when laying out the cards. Afterward, the cards will be scaled to fit the container.",
                  "importance": "low",
                  "default": true
                },
                {
                  "name": "numCardsToUse",
                  "type": "number",
                  "label": "Number of cards to use",
                  "description": "Setting this to a number greater than 2 will make the game pick random cards from the list of cards.",
                  "importance": "low",
                  "optional": true,
                  "min": 2
                },
                {
                  "name": "allowRetry",
                  "type": "boolean",
                  "label": "Add button for retrying when the game is over",
                  "importance": "low",
                  "default": true
                }
              ]
            },
            {
              "name": "lookNFeel",
              "type": "group",
              "label": "Look and feel",
              "importance": "low",
              "description": "Control the visuals of the game.",
              "optional": true,
              "fields": [
                {
                  "name": "themeColor",
                  "type": "text",
                  "label": "Theme Color",
                  "importance": "low",
                  "description": "Choose a color to create a theme for your card game.",
                  "optional": true,
                  "default": "#909090",
                  "widget": "colorSelector",
                  "spectrum": {
                    "showInput": true
                  }
                },
                {
                  "name": "cardBack",
                  "type": "image",
                  "label": "Card Back",
                  "importance": "low",
                  "optional": true,
                  "description": "Use a custom back for your cards.",
                  "ratio": 1
                }
              ]
            },
            {
              "label": "Localization",
              "importance": "low",
              "name": "l10n",
              "type": "group",
              "common": true,
              "fields": [
                {
                  "label": "Card turns text",
                  "importance": "low",
                  "name": "cardTurns",
                  "type": "text",
                  "default": "Card turns"
                },
                {
                  "label": "Time spent text",
                  "importance": "low",
                  "name": "timeSpent",
                  "type": "text",
                  "default": "Time spent"
                },
                {
                  "label": "Feedback text",
                  "importance": "low",
                  "name": "feedback",
                  "type": "text",
                  "default": "Good work!"
                },
                {
                  "label": "Try again button text",
                  "importance": "low",
                  "name": "tryAgain",
                  "type": "text",
                  "default": "Reset"
                },
                {
                  "label": "Close button label",
                  "importance": "low",
                  "name": "closeLabel",
                  "type": "text",
                  "default": "Close"
                },
                {
                  "label": "Game label",
                  "importance": "low",
                  "name": "label",
                  "type": "text",
                  "default": "Memory Game. Find the matching cards."
                },
                {
                  "label": "Game finished label",
                  "importance": "low",
                  "name": "done",
                  "type": "text",
                  "default": "All of the cards have been found."
                },
                {
                  "label": "Card indexing label",
                  "importance": "low",
                  "name": "cardPrefix",
                  "type": "text",
                  "default": "Card %num:"
                },
                {
                  "label": "Card unturned label",
                  "importance": "low",
                  "name": "cardUnturned",
                  "type": "text",
                  "default": "Unturned."
                },
                {
                  "label": "Card matched label",
                  "importance": "low",
                  "name": "cardMatched",
                  "type": "text",
                  "default": "Match found."
                }
              ]
            }
          ]';
    }

    //H5P.MarkTheWords-1.11
    private function updatedMarkTheWordsSemantics() { 
        return '[
          {
            "name": "media",
            "type": "group",
            "label": "Media",
            "importance": "medium",
            "fields": [
              {
                "name": "type",
                "type": "library",
                "label": "Type",
                "importance": "medium",
                "options": [
                  "H5P.Image 1.1",
                  "H5P.Video 1.6",
                  "H5P.Audio 1.5"
                ],
                "optional": true,
                "description": "Optional media to display above the question."
              },
              {
                "name": "disableImageZooming",
                "type": "boolean",
                "label": "Disable image zooming",
                "importance": "low",
                "default": false,
                "optional": true,
                "widget": "showWhen",
                "showWhen": {
                  "rules": [
                    {
                      "field": "type",
                      "equals": "H5P.Image 1.1"
                    }
                  ]
                }
              }
            ]
          },
          {
            "label": "Task description",
            "importance": "high",
            "name": "taskDescription",
            "type": "text",
            "widget": "html",
            "description": "Describe how the user should solve the task.",
            "placeholder": "Click on all the verbs in the text that follows.",
            "enterMode": "p",
            "tags": [
              "strong",
              "em",
              "u",
              "a",
              "ul",
              "ol",
              "h2",
              "h3",
              "hr",
              "pre",
              "code"
            ]
          },
          {
            "label": "Textfield",
            "importance": "high",
            "name": "textField",
            "type": "text",
            "widget": "html",
            "tags": [
              "p",
              "br",
              "strong",
              "em",
              "code"
            ],
            "placeholder": "This is an answer: *answer*.",
            "description": "",
            "important": {
              "description": "<ul><li>Correct words are marked with asterisks (*) before and after the word.</li><li>Asterisks can be added within marked words by adding another asterisk, *correctword*** =&gt; correctword*.</li><li>Only words may be marked as correct. Not phrases.</li></ul>",
              "example": "The correct words are marked like this: *correctword*, an asterisk is written like this: *correctword***."
            }
          },
          {
            "name": "overallFeedback",
            "type": "group",
            "label": "Overall Feedback",
            "importance": "low",
            "expanded": true,
            "fields": [
              {
                "name": "overallFeedback",
                "type": "list",
                "widgets": [
                  {
                    "name": "RangeList",
                    "label": "Default"
                  }
                ],
                "importance": "high",
                "label": "Define custom feedback for any score range",
                "description": "Click the \"Add range\" button to add as many ranges as you need. Example: 0-20% Bad score, 21-91% Average Score, 91-100% Great Score!",
                "entity": "range",
                "min": 1,
                "defaultNum": 1,
                "optional": true,
                "field": {
                  "name": "overallFeedback",
                  "type": "group",
                  "importance": "low",
                  "fields": [
                    {
                      "name": "from",
                      "type": "number",
                      "label": "Score Range",
                      "min": 0,
                      "max": 100,
                      "default": 0,
                      "unit": "%"
                    },
                    {
                      "name": "to",
                      "type": "number",
                      "min": 0,
                      "max": 100,
                      "default": 100,
                      "unit": "%"
                    },
                    {
                      "name": "feedback",
                      "type": "text",
                      "label": "Feedback for defined score range",
                      "importance": "low",
                      "placeholder": "Fill in the feedback",
                      "optional": true
                    }
                  ]
                }
              }
            ]
          },
          {
            "label": "Text for \"Check\" button",
            "importance": "low",
            "name": "checkAnswerButton",
            "type": "text",
            "default": "Check",
            "common": true
          },
          {
            "label": "Text for \"Submit\" button",
            "importance": "low",
            "name": "submitAnswerButton",
            "type": "text",
            "default": "Submit",
            "common": true
          },
          {
            "label": "Text for \"Retry\" button",
            "importance": "low",
            "name": "tryAgainButton",
            "type": "text",
            "default": "Retry",
            "common": true
          },
          {
            "label": "Text for \"Show solution\" button",
            "importance": "low",
            "name": "showSolutionButton",
            "type": "text",
            "default": "Show solution",
            "common": true
          },
          {
            "name": "behaviour",
            "importance": "low",
            "type": "group",
            "label": "Behavior settings.",
            "description": "These options will let you control how the task behaves.",
            "optional": true,
            "fields": [
              {
                "name": "enableRetry",
                "type": "boolean",
                "label": "Enable \"Retry\"",
                "importance": "low",
                "default": true
              },
              {
                "name": "enableSolutionsButton",
                "type": "boolean",
                "label": "Enable \"Show solution\" button",
                "importance": "low",
                "default": true
              },
              {
                "name": "enableCheckButton",
                "type": "boolean",
                "label": "Enable \"Check\" button",
                "widget": "none",
                "importance": "low",
                "default": true,
                "optional": true
              },
              {
                "name": "showScorePoints",
                "type": "boolean",
                "label": "Show score points",
                "description": "Show points earned for each answer.",
                "importance": "low",
                "default": true
              }
            ]
          },
          {
            "name": "currikisettings",
            "type": "group",
            "label": "Curriki settings",
            "importance": "low",
            "description": "These options will let you control how the curriki studio behaves.",
            "optional": true,
            "fields": [
              {
                "label": "Do not Show Submit Button",
                "importance": "low",
                "name": "disableSubmitButton",
                "type": "boolean",
                "default": false,
                "optional": true,
                "description": "This option only applies to a standalone activity. The Submit button is required for grade passback to an LMS."
              },
              {
                "label": "Placeholder",
                "importance": "low",
                "name": "placeholder",
                "type": "boolean",
                "default": false,
                "optional": true,
                "description": "This option is a place holder. will be used in future"
              },
              {
                "label": "Curriki Localization",
                "description": "Here you can edit settings or translate texts used in curriki settings",
                "importance": "low",
                "name": "currikil10n",
                "type": "group",
                "fields": [
                  {
                    "label": "Text for \"Submit\" button",
                    "name": "submitAnswer",
                    "type": "text",
                    "default": "Submit",
                    "optional": true
                  },
                  {
                    "label": "Text for \"Placeholder\" button",
                    "importance": "low",
                    "name": "placeholderButton",
                    "type": "text",
                    "default": "Placeholder",
                    "optional": true
                  }
                ]
              }
            ]
          },
          {
            "label": "Correct answer text",
            "importance": "low",
            "name": "correctAnswer",
            "type": "text",
            "default": "Correct!",
            "description": "Text used to indicate that an answer is correct",
            "common": true
          },
          {
            "label": "Incorrect answer text",
            "importance": "low",
            "name": "incorrectAnswer",
            "type": "text",
            "default": "Incorrect!",
            "description": "Text used to indicate that an answer is incorrect",
            "common": true
          },
          {
            "label": "Missed answer text",
            "importance": "low",
            "name": "missedAnswer",
            "type": "text",
            "default": "Answer not found!",
            "description": "Text used to indicate that an answer is missing",
            "common": true
          },
          {
            "label": "Description for Display Solution",
            "importance": "low",
            "name": "displaySolutionDescription",
            "type": "text",
            "default": "Task is updated to contain the solution.",
            "description": "This text tells the user that the tasks has been updated with the solution.",
            "common": true
          },
          {
            "name": "scoreBarLabel",
            "type": "text",
            "label": "Textual representation of the score bar for those using a readspeaker",
            "default": "You got :num out of :total points",
            "importance": "low",
            "common": true
          },
          {
            "name": "a11yFullTextLabel",
            "type": "text",
            "label": "Label for the full readable text for assistive technologies",
            "default": "Full readable text",
            "importance": "low",
            "common": true
          },
          {
            "name": "a11yClickableTextLabel",
            "type": "text",
            "label": "Label for the text where words can be marked for assistive technologies",
            "default": "Full text where words can be marked",
            "importance": "low",
            "common": true
          },
          {
            "name": "a11ySolutionModeHeader",
            "type": "text",
            "label": "Solution mode header for assistive technologies",
            "default": "Solution mode",
            "importance": "low",
            "common": true
          },
          {
            "name": "a11yCheckingHeader",
            "type": "text",
            "label": "Checking mode header for assistive technologies",
            "default": "Checking mode",
            "importance": "low",
            "common": true
          },
          {
            "name": "a11yCheck",
            "type": "text",
            "label": "Assistive technology description for \"Check\" button",
            "default": "Check the answers. The responses will be marked as correct, incorrect, or unanswered.",
            "importance": "low",
            "common": true
          },
          {
            "name": "a11yShowSolution",
            "type": "text",
            "label": "Assistive technology description for \"Show Solution\" button",
            "default": "Show the solution. The task will be marked with its correct solution.",
            "importance": "low",
            "common": true
          },
          {
            "name": "a11yRetry",
            "type": "text",
            "label": "Assistive technology description for \"Retry\" button",
            "default": "Retry the task. Reset all responses and start the task over again.",
            "importance": "low",
            "common": true
          }
        ]
        ';
    }

    //H5P.ImageSequencing-1.1
    private function updatedImageSequencingSemantics() { 
        return '[
            {
              "label": "Task Description",
              "name": "taskDescription",
              "type": "text",
              "default": "Drag to arrange the images in the correct sequence",
              "description": "A guide telling the user how to solve this task.",
              "importance": "high"
            },
            {
              "label": "Alternate Task Description",
              "name": "altTaskDescription",
              "type": "text",
              "default": "Make the following list be ordered correctly. Use the cursor keys to navigate through the list items, use space to activate or deactivate an item and the cursor keys to move it",
              "description": "A guide intended for visually impaired users on how to solve this task.",
              "importance": "high"
            },
            {
              "name": "sequenceImages",
              "type": "list",
              "widgets": [
                {
                  "name": "VerticalTabs",
                  "label": "Default"
                }
              ],
              "label": "Images",
              "importance": "high",
              "entity": "image",
              "min": 3,
              "field": {
                "type": "group",
                "name": "imageElement",
                "label": "Image Element",
                "importance": "high",
                "fields": [
                  {
                    "name": "image",
                    "type": "image",
                    "label": "Image",
                    "importance": "high"
                  },
                  {
                    "name": "imageDescription",
                    "type": "text",
                    "label": "Image Description",
                    "importance": "low",
                    "description": "An image description for users who cannot recognize the image"
                  },
                  {
                    "name": "audio",
                    "description": "An optional audio for the card to play",
                    "type": "audio",
                    "label": "Audio files",
                    "importance": "low",
                    "optional": true
                  }
                ]
              }
            },
            {
              "name": "behaviour",
              "type": "group",
              "label": "Behavior settings",
              "importance": "low",
              "description": "These options will let you control how the game behaves.",
              "optional": true,
              "fields": [
                {
                  "name": "enableSolution",
                  "type": "boolean",
                  "label": "Add a show solution button for the game",
                  "importance": "low",
                  "default": true
                },
                {
                  "name": "enableRetry",
                  "type": "boolean",
                  "label": "Add button for retrying when the game is over",
                  "importance": "low",
                  "default": true
                },
                {
                  "name": "enableResume",
                  "type": "boolean",
                  "label": "Add button for resuming from the current state ",
                  "importance": "low",
                  "default": true
                }
              ]
            },
            {
              "name": "currikisettings",
              "type": "group",
              "label": "Curriki settings",
              "importance": "low",
              "description": "These options will let you control how the curriki studio behaves.",
              "optional": true,
              "fields": [
                {
                  "label": "Do not Show Submit Button",
                  "importance": "low",
                  "name": "disableSubmitButton",
                  "type": "boolean",
                  "default": false,
                  "optional": true,
                  "description": "This option only applies to a standalone activity. The Submit button is required for grade passback to an LMS."
                },
                {
                  "label": "Placeholder",
                  "importance": "low",
                  "name": "placeholder",
                  "type": "boolean",
                  "default": false,
                  "optional": true,
                  "description": "This option is a place holder. will be used in future"
                },
                {
                  "label": "Curriki Localization",
                  "description": "Here you can edit settings or translate texts used in curriki settings",
                  "importance": "low",
                  "name": "currikil10n",
                  "type": "group",
                  "fields": [
                    {
                      "label": "Text for \"Submit\" button",
                      "name": "submitAnswer",
                      "type": "text",
                      "default": "Submit",
                      "optional": true
                    },
                    {
                      "label": "Text for \"Placeholder\" button",
                      "importance": "low",
                      "name": "placeholderButton",
                      "type": "text",
                      "default": "Placeholder",
                      "optional": true
                    }
                  ]
                }
              ]
            },
            {
              "label": "Localization",
              "importance": "low",
              "name": "l10n",
              "type": "group",
              "common": true,
              "fields": [
                {
                  "label": "Total Moves text",
                  "importance": "low",
                  "name": "totalMoves",
                  "type": "text",
                  "default": "Total Moves"
                },
                {
                  "label": "Time spent text",
                  "importance": "low",
                  "name": "timeSpent",
                  "type": "text",
                  "default": "Time spent"
                },
                {
                  "label": "Feedback text",
                  "importance": "low",
                  "name": "score",
                  "type": "text",
                  "default": "You got @score of @total points",
                  "description": "Feedback text, variables available: @score and @total. Example: You got @score of @total possible points"
                },
                {
                  "label": "Text for \"Check\" button",
                  "importance": "low",
                  "name": "checkAnswer",
                  "type": "text",
                  "default": "Check"
                },
                {
                  "label": "Text for \"Retry\" button",
                  "importance": "low",
                  "name": "tryAgain",
                  "type": "text",
                  "default": "Retry"
                },
                {
                  "label": "Text for \"Show Solution\" button",
                  "importance": "low",
                  "name": "showSolution",
                  "type": "text",
                  "default": "ShowSolution"
                },
                {
                  "label": "Text for \"Resume\" button",
                  "importance": "low",
                  "name": "resume",
                  "type": "text",
                  "default": "Resume"
                },
                {
                  "name": "audioNotSupported",
                  "type": "text",
                  "label": "Audio not supported message",
                  "importance": "low",
                  "common": true,
                  "default": "Audio Error"
                },
                {
                  "name": "ariaPlay",
                  "type": "text",
                  "label": "Play button (text for readspeakers)",
                  "importance": "low",
                  "common": true,
                  "default": "Play the corresponding audio"
                },
                {
                  "name": "ariaMoveDescription",
                  "type": "text",
                  "label": "Card moving description (text for readspeakers)",
                  "description": "@posSrc : card initial position, @posDes : card final position",
                  "importance": "low",
                  "common": true,
                  "default": "Moved @cardDesc from @posSrc to @posDes"
                },
                {
                  "name": "ariaCardDesc",
                  "type": "text",
                  "label": "Default Card Description (text for readspeakers)",
                  "importance": "low",
                  "common": true,
                  "default": "sequencing item"
                }
              ]
            }
          ]';
    }

    //H5P.ImagePair-1.1
    private function updatedImagePairSemantics() { 
        return '[
            {
              "label": "Task Description",
              "name": "taskDescription",
              "type": "text",
              "default": "Drag images from the left to match them with corresponding images on the right",
              "description": "A guide telling the user how to solve this task.",
              "importance": "high"
            },
            {
              "name": "cards",
              "type": "list",
              "widgets": [
                {
                  "name": "VerticalTabs",
                  "label": "Default"
                }
              ],
              "label": "Cards",
              "importance": "high",
              "entity": "card",
              "min": 2,
              "max": 100,
              "field": {
                "type": "group",
                "name": "card",
                "label": "Card",
                "importance": "high",
                "fields": [
                  {
                    "name": "image",
                    "type": "image",
                    "label": "Image",
                    "importance": "high",
                    "ratio": 1
                  },
                  {
                    "name": "imageAlt",
                    "type": "text",
                    "label": "Alternative text for Image",
                    "importance": "high",
                    "description": "Describe what can be seen in the photo. The text is read by text-to-speech tools needed by visually impaired users."
                  },
                  {
                    "name": "match",
                    "type": "image",
                    "label": "Matching Image",
                    "importance": "low",
                    "optional": true,
                    "description": "An optional image to match against instead of using two cards with the same image.",
                    "ratio": 1
                  },
                  {
                    "name": "matchAlt",
                    "type": "text",
                    "label": "Alternative text for Matching Image",
                    "importance": "low",
                    "optional": true,
                    "description": "Describe what can be seen in the photo. The text is read by text-to-speech tools needed by visually impaired users."
                  }
                ]
              }
            },
            {
              "name": "behaviour",
              "type": "group",
              "label": "Behavior settings",
              "importance": "low",
              "description": "These options will let you control how the game behaves.",
              "optional": true,
              "fields": [
                {
                  "name": "allowRetry",
                  "type": "boolean",
                  "label": "Add button for retrying when the game is over",
                  "importance": "low",
                  "default": true
                }
              ]
            },
            {
              "name": "currikisettings",
              "type": "group",
              "label": "Curriki settings",
              "importance": "low",
              "description": "These options will let you control how the curriki studio behaves.",
              "optional": true,
              "fields": [
                {
                  "label": "Do not Show Submit Button",
                  "importance": "low",
                  "name": "disableSubmitButton",
                  "type": "boolean",
                  "default": false,
                  "optional": true,
                  "description": "This option only applies to a standalone activity. The Submit button is required for grade passback to an LMS."
                },
                {
                  "label": "Placeholder",
                  "importance": "low",
                  "name": "placeholder",
                  "type": "boolean",
                  "default": false,
                  "optional": true,
                  "description": "This option is a place holder. will be used in future"
                },
                {
                  "label": "Curriki Localization",
                  "description": "Here you can edit settings or translate texts used in curriki settings",
                  "importance": "low",
                  "name": "currikil10n",
                  "type": "group",
                  "fields": [
                    {
                      "label": "Text for \"Submit\" button",
                      "name": "submitAnswer",
                      "type": "text",
                      "default": "Submit",
                      "optional": true
                    },
                    {
                      "label": "Text for \"Placeholder\" button",
                      "importance": "low",
                      "name": "placeholderButton",
                      "type": "text",
                      "default": "Placeholder",
                      "optional": true
                    }
                  ]
                }
              ]
            },
            {
              "label": "Localization",
              "importance": "low",
              "name": "l10n",
              "type": "group",
              "common": true,
              "fields": [
                {
                  "label": "Text for \"Check\" button",
                  "importance": "low",
                  "name": "checkAnswer",
                  "type": "text",
                  "default": "Check"
                },
                {
                  "label": "Text for \"Retry\" button",
                  "importance": "low",
                  "name": "tryAgain",
                  "type": "text",
                  "default": "Retry"
                },
                {
                  "label": "Text for \"ShowSolution\" button",
                  "importance": "low",
                  "name": "showSolution",
                  "type": "text",
                  "default": "Show Solution"
                },
                {
                  "label": "Feedback text",
                  "importance": "low",
                  "name": "score",
                  "type": "text",
                  "default": "You got @score of @total points",
                  "description": "Feedback text, variables available: @score and @total. Example: You got @score of @total possible points"
                }
              ]
            }
          ]';
    }

       //H5P.DragQuestion-1.14
    private function updatedDragQuestionSemantics() { 
        return '[
          {
            "name": "scoreShow",
            "type": "text",
            "label": "Check answer button",
            "importance": "low",
            "default": "Check",
            "common": true
          },
          {
            "name": "submitAnswers",
            "type": "text",
            "label": "Submit answer button",
            "importance": "low",
            "default": "Submit Answers",
            "common": true
          },
          {
            "name": "tryAgain",
            "type": "text",
            "label": "Retry button",
            "importance": "low",
            "default": "Retry",
            "common": true,
            "optional": true
          },
          {
            "label": "Score explanation text",
            "importance": "low",
            "name": "scoreExplanation",
            "type": "text",
            "default": "Correct answers give +1 point. Incorrect answers give -1 point. The lowest possible score is 0.",
            "common": true,
            "optional": true
          },
          {
            "name": "question",
            "importance": "high",
            "type": "group",
            "widget": "wizard",
            "fields": [
              {
                "name": "settings",
                "type": "group",
                "label": "Settings",
                "importance": "high",
                "fields": [
                  {
                    "name": "background",
                    "type": "image",
                    "label": "Background image",
                    "importance": "low",
                    "optional": true,
                    "description": "Optional. Select an image to use as background for your drag and drop task."
                  },
                  {
                    "name": "size",
                    "type": "group",
                    "widget": "dimensions",
                    "label": "Task size",
                    "importance": "low",
                    "description": "Specify how large (in px) the play area should be.",
                    "default": {
                      "width": 620,
                      "height": 310,
                      "field": "background"
                    },
                    "fields": [
                      {
                        "name": "width",
                        "type": "number"
                      },
                      {
                        "name": "height",
                        "type": "number"
                      }
                    ]
                  }
                ]
              },
              {
                "name": "task",
                "type": "group",
                "widget": "dragQuestion",
                "label": "Task",
                "importance": "high",
                "description": "Start by placing your drop zones.<br/>Next, place your droppable elements and check off the appropriate drop zones.<br/>Last, edit your drop zone again and check off the correct answers.",
                "fields": [
                  {
                    "name": "elements",
                    "type": "list",
                    "label": "Elements",
                    "importance": "high",
                    "entity": "element",
                    "field": {
                      "type": "group",
                      "label": "Element",
                      "importance": "high",
                      "fields": [
                        {
                          "name": "type",
                          "type": "library",
                          "description": "Choose the type of content you would like to add.",
                          "importance": "medium",
                          "options": [
                            "H5P.AdvancedText 1.1",
                            "H5P.Image 1.1"
                          ]
                        },
                        {
                          "name": "x",
                          "type": "number",
                          "widget": "none"
                        },
                        {
                          "name": "y",
                          "type": "number",
                          "widget": "none"
                        },
                        {
                          "name": "height",
                          "type": "number",
                          "widget": "none"
                        },
                        {
                          "name": "width",
                          "type": "number",
                          "widget": "none"
                        },
                        {
                          "name": "dropZones",
                          "type": "select",
                          "widget": "dynamicCheckboxes",
                          "label": "Select drop zones",
                          "importance": "high",
                          "multiple": true
                        },
                        {
                          "name": "backgroundOpacity",
                          "type": "number",
                          "label": "Background Opacity",
                          "importance": "low",
                          "min": 0,
                          "max": 100,
                          "step": 5,
                          "default": 100,
                          "optional": true
                        },
                        {
                          "name": "multiple",
                          "type": "boolean",
                          "label": "Infinite number of element instances",
                          "importance": "low",
                          "description": "Clones this element so that it can be dragged to multiple drop zones.",
                          "default": false
                        }
                      ]
                    }
                  },
                  {
                    "name": "dropZones",
                    "type": "list",
                    "label": "Drop Zones",
                    "importance": "high",
                    "entity": "Drop Zone",
                    "field": {
                      "type": "group",
                      "label": "Drop Zone",
                      "importance": "high",
                      "fields": [
                        {
                          "name": "label",
                          "type": "text",
                          "widget": "html",
                          "label": "Label",
                          "importance": "medium",
                          "enterMode": "div",
                          "tags": [
                            "strong",
                            "em",
                            "del",
                            "code"
                          ]
                        },
                        {
                          "name": "showLabel",
                          "type": "boolean",
                          "label": "Show label",
                          "importance": "low"
                        },
                        {
                          "name": "x",
                          "type": "number",
                          "widget": "none"
                        },
                        {
                          "name": "y",
                          "type": "number",
                          "widget": "none"
                        },
                        {
                          "name": "height",
                          "type": "number",
                          "widget": "none"
                        },
                        {
                          "name": "width",
                          "type": "number",
                          "widget": "none"
                        },
                        {
                          "name": "correctElements",
                          "type": "select",
                          "widget": "dynamicCheckboxes",
                          "label": "Select correct elements",
                          "importance": "low",
                          "multiple": true
                        },
                        {
                          "name": "backgroundOpacity",
                          "type": "number",
                          "label": "Background Opacity",
                          "importance": "low",
                          "min": 0,
                          "max": 100,
                          "step": 5,
                          "default": 100,
                          "optional": true
                        },
                        {
                          "name": "tipsAndFeedback",
                          "type": "group",
                          "label": "Tips and feedback",
                          "importance": "low",
                          "optional": true,
                          "fields": [
                            {
                              "name": "tip",
                              "label": "Tip text",
                              "importance": "low",
                              "type": "text",
                              "widget": "html",
                              "tags": [
                                "p",
                                "br",
                                "strong",
                                "em",
                                "code"
                              ],
                              "optional": true
                            },
                            {
                              "name": "feedbackOnCorrect",
                              "type": "text",
                              "label": "Message displayed on correct match",
                              "importance": "low",
                              "description": "Message will appear below the task on \"check\" if correct droppable is matched.",
                              "optional": true
                            },
                            {
                              "name": "feedbackOnIncorrect",
                              "type": "text",
                              "label": "Message displayed on incorrect match",
                              "importance": "low",
                              "description": "Message will appear below the task on \"check\" if the match is incorrect.",
                              "optional": true
                            }
                          ]
                        },
                        {
                          "name": "single",
                          "type": "boolean",
                          "label": "This drop zone can only contain one element",
                          "description": "Make sure there is only one correct answer for this dropzone",
                          "importance": "low",
                          "default": false
                        },
                        {
                          "name": "autoAlign",
                          "type": "boolean",
                          "label": "Enable Auto-Align",
                          "importance": "low",
                          "description": "Will auto-align all draggables dropped in this zone."
                        }
                      ]
                    }
                  }
                ]
              }
            ]
          },
          {
            "name": "overallFeedback",
            "type": "group",
            "label": "Overall Feedback",
            "importance": "low",
            "expanded": true,
            "fields": [
              {
                "name": "overallFeedback",
                "type": "list",
                "widgets": [
                  {
                    "name": "RangeList",
                    "label": "Default"
                  }
                ],
                "importance": "high",
                "label": "Define custom feedback for any score range",
                "description": "Click the \"Add range\" button to add as many ranges as you need. Example: 0-20% Bad score, 21-91% Average Score, 91-100% Great Score!",
                "entity": "range",
                "min": 1,
                "defaultNum": 1,
                "optional": true,
                "field": {
                  "name": "overallFeedback",
                  "type": "group",
                  "importance": "low",
                  "fields": [
                    {
                      "name": "from",
                      "type": "number",
                      "label": "Score Range",
                      "min": 0,
                      "max": 100,
                      "default": 0,
                      "unit": "%"
                    },
                    {
                      "name": "to",
                      "type": "number",
                      "min": 0,
                      "max": 100,
                      "default": 100,
                      "unit": "%"
                    },
                    {
                      "name": "feedback",
                      "type": "text",
                      "label": "Feedback for defined score range",
                      "importance": "low",
                      "placeholder": "Fill in the feedback",
                      "optional": true
                    }
                  ]
                }
              }
            ]
          },
          {
            "name": "behaviour",
            "type": "group",
            "label": "Behavior settings",
            "importance": "low",
            "description": "These options will let you control how the task behaves.",
            "optional": true,
            "fields": [
              {
                "name": "enableRetry",
                "type": "boolean",
                "label": "Enable \"Retry\"",
                "importance": "low",
                "default": true
              },
              {
                "name": "showSubmitAnswersButton",
                "type": "boolean",
                "label": "Enable \"Submit Answers\"",
                "importance": "low",
                "default": true
              },
              {
                "name": "enableCheckButton",
                "type": "boolean",
                "label": "Enable \"Check\" button",
                "widget": "none",
                "importance": "low",
                "default": true,
                "optional": true
              },
              {
                "name": "singlePoint",
                "type": "boolean",
                "label": "Give one point for the whole task",
                "importance": "low",
                "description": "Disable to give one point for each draggable that is placed correctly.",
                "default": false
              },
              {
                "label": "Apply penalties",
                "name": "applyPenalties",
                "type": "boolean",
                "description": "Apply penalties for elements dropped in the wrong drop zones. This must be enabled when the same element(s) are able to be dropped into multiple drop zones, or if there is only one drop-zone. If this is not enabled, learners may match all items to all drop-zones and always receive a full score.",
                "default": true
              },
              {
                "name": "enableScoreExplanation",
                "type": "boolean",
                "label": "Enable score explanation",
                "description": "Display a score explanation to user when checking their answers (if the Apply penalties option has been selected).",
                "importance": "low",
                "default": true,
                "optional": true,
                "widget": "showWhen",
                "showWhen": {
                  "rules": [
                    {
                      "field": "singlePoint",
                      "equals": false
                    }
                  ]
                }
              },
              {
                "name": "backgroundOpacity",
                "type": "text",
                "label": "Background opacity for draggables",
                "importance": "low",
                "description": "If this field is set, it will override opacity set on all draggable elements. This should be a number between 0 and 100, where 0 means full transparency and 100 means no transparency",
                "optional": true
              },
              {
                "name": "dropZoneHighlighting",
                "type": "select",
                "label": "Drop Zone Highlighting",
                "importance": "low",
                "description": "Choose when to highlight drop zones.",
                "default": "dragging",
                "options": [
                  {
                    "value": "dragging",
                    "label": "When dragging"
                  },
                  {
                    "value": "always",
                    "label": "Always"
                  },
                  {
                    "value": "never",
                    "label": "Never"
                  }
                ]
              },
              {
                "name": "autoAlignSpacing",
                "type": "number",
                "label": "Spacing for Auto-Align (in px)",
                "importance": "low",
                "min": 0,
                "default": 2,
                "optional": true
              },
              {
                "name": "enableFullScreen",
                "label": "Enable FullScreen",
                "importance": "low",
                "type": "boolean",
                "description": "Check this option to enable the full screen button.",
                "default": false
              },
              {
                "name": "showScorePoints",
                "type": "boolean",
                "label": "Show score points",
                "description": "Show points earned for each answer. Not available when the Give one point for the whole task option is enabled.",
                "importance": "low",
                "default": true
              },
              {
                "name": "showTitle",
                "type": "boolean",
                "label": "Show Title",
                "importance": "low",
                "description": "Uncheck this option if you do not want this title to be displayed. The title will only be displayed in summaries, statistics etc.",
                "default": true
              }
            ]
          },
          {
            "name": "localize",
            "type": "group",
            "label": "Localize",
            "common": true,
            "fields": [
              {
                "name": "fullscreen",
                "type": "text",
                "label": "Fullscreen label",
                "default": "Fullscreen"
              },
              {
                "name": "exitFullscreen",
                "type": "text",
                "label": "Exit fullscreen label",
                "default": "Exit fullscreen"
              }
            ]
          },
          {
            "name": "grabbablePrefix",
            "type": "text",
            "label": "Grabbable prefix",
            "importance": "low",
            "default": "Grabbable {num} of {total}.",
            "common": true
          },
          {
            "name": "grabbableSuffix",
            "type": "text",
            "label": "Grabbable suffix",
            "importance": "low",
            "default": "Placed in dropzone {num}.",
            "common": true
          },
          {
            "name": "dropzonePrefix",
            "type": "text",
            "label": "Dropzone prefix",
            "importance": "low",
            "default": "Dropzone {num} of {total}.",
            "common": true
          },
          {
            "name": "noDropzone",
            "type": "text",
            "label": "No dropzone selection label",
            "importance": "low",
            "default": "No dropzone.",
            "common": true
          },
          {
            "name": "tipLabel",
            "type": "text",
            "label": "Label for show tip button",
            "importance": "low",
            "default": "Show tip.",
            "common": true
          },
          {
            "name": "tipAvailable",
            "type": "text",
            "label": "Label for tip available",
            "importance": "low",
            "default": "Tip available",
            "common": true
          },
          {
            "name": "correctAnswer",
            "type": "text",
            "label": "Label for correct answer",
            "importance": "low",
            "default": "Correct answer",
            "common": true
          },
          {
            "name": "wrongAnswer",
            "type": "text",
            "label": "Label for incorrect answer",
            "importance": "low",
            "default": "Wrong answer",
            "common": true
          },
          {
            "name": "feedbackHeader",
            "type": "text",
            "label": "Header for panel containing feedback for correct/incorrect answers",
            "importance": "low",
            "default": "Feedback",
            "common": true
          },
          {
            "name": "scoreBarLabel",
            "type": "text",
            "label": "Textual representation of the score bar for those using a readspeaker",
            "default": "You got :num out of :total points",
            "importance": "low",
            "common": true
          },
          {
            "name": "scoreExplanationButtonLabel",
            "type": "text",
            "label": "Textual representation of the score explanation button",
            "default": "Show score explanation",
            "importance": "low",
            "common": true
          },
          {
            "name": "a11yCheck",
            "type": "text",
            "label": "Assistive technology label for \"Check\" button",
            "default": "Check the answers. The responses will be marked as correct, incorrect, or unanswered.",
            "importance": "low",
            "common": true
          },
          {
            "name": "a11yRetry",
            "type": "text",
            "label": "Assistive technology label for \"Retry\" button",
            "default": "Retry the task. Reset all responses and start the task over again.",
            "importance": "low",
            "common": true
          }
        ]
          ';
    }

    //H5P.InteractiveVideo-1.12
    private function updatedInteractiveVideoSemantics() { 
        return '[
            {
              "name": "interactiveVideo",
              "type": "group",
              "widget": "wizard",
              "label": "Interactive Video Editor",
              "importance": "high",
              "fields": [
                {
                  "name": "video",
                  "type": "group",
                  "label": "Upload/embed video",
                  "importance": "high",
                  "fields": [
                    {
                      "name": "files",
                      "type": "video",
                      "label": "Add a video",
                      "importance": "high",
                      "description": "Click below to add a video you wish to use in your interactive video. You can add a video link or upload video files. It is possible to add several versions of the video with different qualities. To ensure maximum support in browsers at least add a version in webm and mp4 formats.",
                      "extraAttributes": [
                        "metadata"
                      ],
                      "enableCustomQualityLabel": true
                    },
                    {
                      "name": "startScreenOptions",
                      "type": "group",
                      "label": "Start screen options (unsupported for YouTube videos)",
                      "importance": "low",
                      "fields": [
                        {
                          "name": "title",
                          "type": "text",
                          "label": "The title of this interactive video",
                          "importance": "low",
                          "maxLength": 60,
                          "default": "Interactive Video",
                          "description": "Used in summaries, statistics etc."
                        },
                        {
                          "name": "hideStartTitle",
                          "type": "boolean",
                          "label": "Hide title on video start screen",
                          "importance": "low",
                          "optional": true,
                          "default": false
                        },
                        {
                          "name": "shortStartDescription",
                          "type": "text",
                          "label": "Short description (Optional)",
                          "importance": "low",
                          "optional": true,
                          "maxLength": 120,
                          "description": "Optional. Display a short description text on the video start screen. Does not work for YouTube videos."
                        },
                        {
                          "name": "poster",
                          "type": "image",
                          "label": "Poster image",
                          "importance": "low",
                          "optional": true,
                          "description": "Image displayed before the user launches the video. Does not work for YouTube Videos."
                        }
                      ]
                    },
                    {
                      "name": "textTracks",
                      "type": "group",
                      "label": "Text tracks (unsupported for YouTube videos)",
                      "importance": "low",
                      "fields": [
                        {
                          "name": "videoTrack",
                          "type": "list",
                          "label": "Available text tracks",
                          "importance": "low",
                          "optional": true,
                          "entity": "Track",
                          "min": 0,
                          "defaultNum": 1,
                          "field": {
                            "name": "track",
                            "type": "group",
                            "label": "Track",
                            "importance": "low",
                            "expanded": false,
                            "fields": [
                              {
                                "name": "label",
                                "type": "text",
                                "label": "Track label",
                                "description": "Used if you offer multiple tracks and the user has to choose a track. For instance Spanish subtitles could be the label of a Spanish subtitle track.",
                                "importance": "low",
                                "default": "Subtitles",
                                "optional": true
                              },
                              {
                                "name": "kind",
                                "type": "select",
                                "label": "Type of text track",
                                "importance": "low",
                                "default": "subtitles",
                                "options": [
                                  {
                                    "value": "subtitles",
                                    "label": "Subtitles"
                                  },
                                  {
                                    "value": "captions",
                                    "label": "Captions"
                                  },
                                  {
                                    "value": "descriptions",
                                    "label": "Descriptions"
                                  }
                                ]
                              },
                              {
                                "name": "srcLang",
                                "type": "text",
                                "label": "Source language, must be defined for subtitles",
                                "importance": "low",
                                "default": "en",
                                "description": "Must be a valid BCP 47 language tag. If Subtitles is the type of text track selected, the source language of the track must be defined."
                              },
                              {
                                "name": "track",
                                "type": "file",
                                "label": "Track source (WebVTT file)",
                                "importance": "low"
                              }
                            ]
                          }
                        },
                        {
                          "name": "defaultTrackLabel",
                          "type": "text",
                          "label": "Default text track",
                          "description": "If left empty or not matching any of the text tracks the first text track will be used as the default.",
                          "importance": "low",
                          "optional": true
                        }
                      ]
                    }
                  ]
                },
                {
                  "name": "assets",
                  "type": "group",
                  "label": "Add interactions",
                  "importance": "high",
                  "widget": "interactiveVideo",
                  "video": "video/files",
                  "poster": "video/startScreenOptions/poster",
                  "fields": [
                    {
                      "name": "interactions",
                      "type": "list",
                      "field": {
                        "name": "interaction",
                        "type": "group",
                        "fields": [
                          {
                            "name": "duration",
                            "type": "group",
                            "widget": "duration",
                            "label": "Display time",
                            "importance": "low",
                            "fields": [
                              {
                                "name": "from",
                                "type": "number"
                              },
                              {
                                "name": "to",
                                "type": "number"
                              }
                            ]
                          },
                          {
                            "name": "pause",
                            "label": "Pause video",
                            "importance": "low",
                            "type": "boolean"
                          },
                          {
                            "name": "displayType",
                            "label": "Display as",
                            "importance": "low",
                            "description": "<b>Button</b> is a collapsed interaction the user must press to open. <b>Poster</b> is an expanded interaction displayed directly on top of the video",
                            "type": "select",
                            "widget": "imageRadioButtonGroup",
                            "options": [
                              {
                                "value": "button",
                                "label": "Button"
                              },
                              {
                                "value": "poster",
                                "label": "Poster"
                              }
                            ],
                            "default": "button"
                          },
                          {
                            "name": "buttonOnMobile",
                            "label": "Turn into button on small screens",
                            "importance": "low",
                            "type": "boolean",
                            "default": false
                          },
                          {
                            "name": "label",
                            "type": "text",
                            "widget": "html",
                            "label": "Label",
                            "importance": "low",
                            "description": "Label displayed next to interaction icon.",
                            "optional": true,
                            "enterMode": "p",
                            "tags": [
                              "p"
                            ]
                          },
                          {
                            "name": "x",
                            "type": "number",
                            "importance": "low",
                            "widget": "none"
                          },
                          {
                            "name": "y",
                            "type": "number",
                            "importance": "low",
                            "widget": "none"
                          },
                          {
                            "name": "width",
                            "type": "number",
                            "widget": "none",
                            "importance": "low",
                            "optional": true
                          },
                          {
                            "name": "height",
                            "type": "number",
                            "widget": "none",
                            "importance": "low",
                            "optional": true
                          },
                          {
                            "name": "libraryTitle",
                            "type": "text",
                            "importance": "low",
                            "optional": true,
                            "widget": "none"
                          },
                          {
                            "name": "action",
                            "type": "library",
                            "importance": "low",
                            "options": [
                              "H5P.Nil 1.0",
                              "H5P.Text 1.1",
                              "H5P.Table 1.1",
                              "H5P.Link 1.3",
                              "H5P.Image 1.1",
                              "H5P.Summary 1.10",
                              "H5P.SingleChoiceSet 1.11",
                              "H5P.MultiChoice 1.14",
                              "H5P.TrueFalse 1.6",
                              "H5P.Blanks 1.12",
                              "H5P.DragQuestion 1.13",
                              "H5P.MarkTheWords 1.9",
                              "H5P.DragText 1.8",
                              "H5P.GoToQuestion 1.3",
                              "H5P.IVHotspot 1.2",
                              "H5P.Questionnaire 1.3",
                              "H5P.FreeTextQuestion 1.0"
                            ]
                          },
                          {
                            "name": "adaptivity",
                            "type": "group",
                            "label": "Adaptivity",
                            "importance": "low",
                            "optional": true,
                            "fields": [
                              {
                                "name": "correct",
                                "type": "group",
                                "label": "Action on all correct",
                                "fields": [
                                  {
                                    "name": "seekTo",
                                    "type": "number",
                                    "widget": "timecode",
                                    "label": "Seek to",
                                    "description": "Enter timecode in the format M:SS"
                                  },
                                  {
                                    "name": "allowOptOut",
                                    "type": "boolean",
                                    "label": "Allow the user to opt out and continue"
                                  },
                                  {
                                    "name": "message",
                                    "type": "text",
                                    "widget": "html",
                                    "enterMode": "p",
                                    "tags": [
                                      "strong",
                                      "em",
                                      "del",
                                      "a",
                                      "code"
                                    ],
                                    "label": "Message"
                                  },
                                  {
                                    "name": "seekLabel",
                                    "type": "text",
                                    "label": "Label for seek button"
                                  }
                                ]
                              },
                              {
                                "name": "wrong",
                                "type": "group",
                                "label": "Action on wrong",
                                "fields": [
                                  {
                                    "name": "seekTo",
                                    "type": "number",
                                    "widget": "timecode",
                                    "label": "Seek to",
                                    "description": "Enter timecode in the format M:SS"
                                  },
                                  {
                                    "name": "allowOptOut",
                                    "type": "boolean",
                                    "label": "Allow the user to opt out and continue"
                                  },
                                  {
                                    "name": "message",
                                    "type": "text",
                                    "widget": "html",
                                    "enterMode": "p",
                                    "tags": [
                                      "strong",
                                      "em",
                                      "del",
                                      "a",
                                      "code"
                                    ],
                                    "label": "Message"
                                  },
                                  {
                                    "name": "seekLabel",
                                    "type": "text",
                                    "label": "Label for seek button"
                                  }
                                ]
                              },
                              {
                                "name": "requireCompletion",
                                "type": "boolean",
                                "label": "Require full score for task before proceeding",
                                "description": "For best functionality this option should be used in conjunction with the \"Prevent skipping forward in a video\" option of Interactive Video."
                              }
                            ]
                          },
                          {
                            "name": "visuals",
                            "label": "Visuals",
                            "importance": "low",
                            "type": "group",
                            "fields": [
                              {
                                "name": "backgroundColor",
                                "type": "text",
                                "label": "Background color",
                                "widget": "colorSelector",
                                "default": "rgb(255, 255, 255)",
                                "spectrum": {
                                  "showInput": true,
                                  "showAlpha": true,
                                  "preferredFormat": "rgb",
                                  "showPalette": true,
                                  "palette": [
                                    [
                                      "rgba(0, 0, 0, 0)"
                                    ],
                                    [
                                      "rgb(67, 67, 67)",
                                      "rgb(102, 102, 102)",
                                      "rgb(204, 204, 204)",
                                      "rgb(217, 217, 217)",
                                      "rgb(255, 255, 255)"
                                    ],
                                    [
                                      "rgb(152, 0, 0)",
                                      "rgb(255, 0, 0)",
                                      "rgb(255, 153, 0)",
                                      "rgb(255, 255, 0)",
                                      "rgb(0, 255, 0)",
                                      "rgb(0, 255, 255)",
                                      "rgb(74, 134, 232)",
                                      "rgb(0, 0, 255)",
                                      "rgb(153, 0, 255)",
                                      "rgb(255, 0, 255)"
                                    ],
                                    [
                                      "rgb(230, 184, 175)",
                                      "rgb(244, 204, 204)",
                                      "rgb(252, 229, 205)",
                                      "rgb(255, 242, 204)",
                                      "rgb(217, 234, 211)",
                                      "rgb(208, 224, 227)",
                                      "rgb(201, 218, 248)",
                                      "rgb(207, 226, 243)",
                                      "rgb(217, 210, 233)",
                                      "rgb(234, 209, 220)",
                                      "rgb(221, 126, 107)",
                                      "rgb(234, 153, 153)",
                                      "rgb(249, 203, 156)",
                                      "rgb(255, 229, 153)",
                                      "rgb(182, 215, 168)",
                                      "rgb(162, 196, 201)",
                                      "rgb(164, 194, 244)",
                                      "rgb(159, 197, 232)",
                                      "rgb(180, 167, 214)",
                                      "rgb(213, 166, 189)",
                                      "rgb(204, 65, 37)",
                                      "rgb(224, 102, 102)",
                                      "rgb(246, 178, 107)",
                                      "rgb(255, 217, 102)",
                                      "rgb(147, 196, 125)",
                                      "rgb(118, 165, 175)",
                                      "rgb(109, 158, 235)",
                                      "rgb(111, 168, 220)",
                                      "rgb(142, 124, 195)",
                                      "rgb(194, 123, 160)",
                                      "rgb(166, 28, 0)",
                                      "rgb(204, 0, 0)",
                                      "rgb(230, 145, 56)",
                                      "rgb(241, 194, 50)",
                                      "rgb(106, 168, 79)",
                                      "rgb(69, 129, 142)",
                                      "rgb(60, 120, 216)",
                                      "rgb(61, 133, 198)",
                                      "rgb(103, 78, 167)",
                                      "rgb(166, 77, 121)",
                                      "rgb(91, 15, 0)",
                                      "rgb(102, 0, 0)",
                                      "rgb(120, 63, 4)",
                                      "rgb(127, 96, 0)",
                                      "rgb(39, 78, 19)",
                                      "rgb(12, 52, 61)",
                                      "rgb(28, 69, 135)",
                                      "rgb(7, 55, 99)",
                                      "rgb(32, 18, 77)",
                                      "rgb(76, 17, 48)"
                                    ]
                                  ]
                                }
                              },
                              {
                                "name": "boxShadow",
                                "type": "boolean",
                                "label": "Box shadow",
                                "default": true,
                                "description": "Adds a subtle shadow around the interaction. You might want to disable this for completely transparent interactions"
                              }
                            ]
                          },
                          {
                            "name": "goto",
                            "label": "Go to on click",
                            "importance": "low",
                            "type": "group",
                            "fields": [
                              {
                                "name": "type",
                                "label": "Type",
                                "type": "select",
                                "widget": "selectToggleFields",
                                "options": [
                                  {
                                    "value": "timecode",
                                    "label": "Timecode",
                                    "hideFields": [
                                      "url"
                                    ]
                                  },
                                  {
                                    "value": "url",
                                    "label": "Another page (URL)",
                                    "hideFields": [
                                      "time"
                                    ]
                                  }
                                ],
                                "optional": true
                              },
                              {
                                "name": "time",
                                "type": "number",
                                "widget": "timecode",
                                "label": "Go To",
                                "description": "The target time the user will be taken to upon pressing the hotspot. Enter timecode in the format M:SS.",
                                "optional": true
                              },
                              {
                                "name": "url",
                                "type": "group",
                                "label": "URL",
                                "widget": "linkWidget",
                                "optional": true,
                                "fields": [
                                  {
                                    "name": "protocol",
                                    "type": "select",
                                    "label": "Protocol",
                                    "options": [
                                      {
                                        "value": "http://",
                                        "label": "http://"
                                      },
                                      {
                                        "value": "https://",
                                        "label": "https://"
                                      },
                                      {
                                        "value": "/",
                                        "label": "(root relative)"
                                      },
                                      {
                                        "value": "other",
                                        "label": "other"
                                      }
                                    ],
                                    "optional": true,
                                    "default": "http://"
                                  },
                                  {
                                    "name": "url",
                                    "type": "text",
                                    "label": "URL",
                                    "optional": true
                                  }
                                ]
                              },
                              {
                                "name": "visualize",
                                "type": "boolean",
                                "label": "Visualize",
                                "description": "Show that interaction can be clicked by adding a border and an icon"
                              }
                            ]
                          }
                        ]
                      }
                    },
                    {
                      "name": "bookmarks",
                      "importance": "low",
                      "type": "list",
                      "field": {
                        "name": "bookmark",
                        "type": "group",
                        "fields": [
                          {
                            "name": "time",
                            "type": "number"
                          },
                          {
                            "name": "label",
                            "type": "text"
                          }
                        ]
                      }
                    },
                    {
                      "name": "endscreens",
                      "importance": "low",
                      "type": "list",
                      "field": {
                        "name": "endscreen",
                        "type": "group",
                        "fields": [
                          {
                            "name": "time",
                            "type": "number"
                          },
                          {
                            "name": "label",
                            "type": "text"
                          }
                        ]
                      }
                    }
                  ]
                },
                {
                  "name": "summary",
                  "type": "group",
                  "label": "Summary task",
                  "importance": "high",
                  "fields": [
                    {
                      "name": "task",
                      "type": "library",
                      "options": [
                        "H5P.Summary 1.10"
                      ],
                      "default": {
                        "library": "H5P.Summary 1.10",
                        "params": {}
                      }
                    },
                    {
                      "name": "displayAt",
                      "type": "number",
                      "label": "Display at",
                      "description": "Number of seconds before the video ends.",
                      "default": 3
                    }
                  ]
                }
              ]
            },
            {
              "name": "override",
              "type": "group",
              "label": "Behavior settings",
              "importance": "low",
              "optional": true,
              "fields": [
                {
                  "name": "startVideoAt",
                  "type": "number",
                  "widget": "timecode",
                  "label": "Start video at",
                  "importance": "low",
                  "optional": true,
                  "description": "Enter timecode in the format M:SS"
                },
                {
                  "name": "autoplay",
                  "type": "boolean",
                  "label": "Auto-play video",
                  "default": false,
                  "optional": true,
                  "description": "Start playing the video automatically"
                },
                {
                  "name": "loop",
                  "type": "boolean",
                  "label": "Loop the video",
                  "default": false,
                  "optional": true,
                  "description": "Check if video should run in a loop"
                },
                {
                  "name": "showSolutionButton",
                  "type": "select",
                  "label": "Override \"Show Solution\" button",
                  "importance": "low",
                  "description": "This option determines if the \"Show Solution\" button will be shown for all questions, disabled for all or configured for each question individually.",
                  "optional": true,
                  "options": [
                    {
                      "value": "on",
                      "label": "Enabled"
                    },
                    {
                      "value": "off",
                      "label": "Disabled"
                    }
                  ]
                },
                {
                  "name": "retryButton",
                  "type": "select",
                  "label": "Override \"Retry\" button",
                  "importance": "low",
                  "description": "This option determines if the \"Retry\" button will be shown for all questions, disabled for all or configured for each question individually.",
                  "optional": true,
                  "options": [
                    {
                      "value": "on",
                      "label": "Enabled"
                    },
                    {
                      "value": "off",
                      "label": "Disabled"
                    }
                  ]
                },
                {
                  "name": "showBookmarksmenuOnLoad",
                  "type": "boolean",
                  "label": "Start with bookmarks menu open",
                  "importance": "low",
                  "default": false,
                  "description": "This function is not available on iPad when using YouTube as video source."
                },
                {
                  "name": "showRewind10",
                  "type": "boolean",
                  "label": "Show button for rewinding 10 seconds",
                  "importance": "low",
                  "default": false
                },
                {
                  "name": "preventSkipping",
                  "type": "boolean",
                  "default": false,
                  "label": "Prevent skipping forward in a video",
                  "importance": "low",
                  "description": "Enabling this options will disable user video navigation through default controls."
                },
                {
                  "name": "deactivateSound",
                  "type": "boolean",
                  "default": false,
                  "label": "Deactivate sound",
                  "importance": "low",
                  "description": "Enabling this option will deactivate the videos sound and prevent it from being switched on."
                }
              ]
            },
            {
              "name": "l10n",
              "type": "group",
              "label": "Localize",
              "importance": "low",
              "common": true,
              "optional": true,
              "fields": [
                {
                  "name": "interaction",
                  "type": "text",
                  "label": "Interaction title",
                  "importance": "low",
                  "default": "Interaction",
                  "optional": true
                },
                {
                  "name": "play",
                  "type": "text",
                  "label": "Play title",
                  "importance": "low",
                  "default": "Play",
                  "optional": true
                },
                {
                  "name": "pause",
                  "type": "text",
                  "label": "Pause title",
                  "importance": "low",
                  "default": "Pause",
                  "optional": true
                },
                {
                  "name": "mute",
                  "type": "text",
                  "label": "Mute title",
                  "importance": "low",
                  "default": "Mute",
                  "optional": true
                },
                {
                  "name": "unmute",
                  "type": "text",
                  "label": "Unmute title",
                  "importance": "low",
                  "default": "Unmute",
                  "optional": true
                },
                {
                  "name": "quality",
                  "type": "text",
                  "label": "Video quality title",
                  "importance": "low",
                  "default": "Video Quality",
                  "optional": true
                },
                {
                  "name": "captions",
                  "type": "text",
                  "label": "Video captions title",
                  "importance": "low",
                  "default": "Captions",
                  "optional": true
                },
                {
                  "name": "close",
                  "type": "text",
                  "label": "Close button text",
                  "importance": "low",
                  "default": "Close",
                  "optional": true
                },
                {
                  "name": "fullscreen",
                  "type": "text",
                  "label": "Fullscreen title",
                  "importance": "low",
                  "default": "Fullscreen",
                  "optional": true
                },
                {
                  "name": "exitFullscreen",
                  "type": "text",
                  "label": "Exit fullscreen title",
                  "importance": "low",
                  "default": "Exit Fullscreen",
                  "optional": true
                },
                {
                  "name": "summary",
                  "type": "text",
                  "label": "Summary title",
                  "importance": "low",
                  "default": "Open summary dialog",
                  "optional": true
                },
                {
                  "name": "bookmarks",
                  "type": "text",
                  "label": "Bookmarks title",
                  "importance": "low",
                  "default": "Bookmarks",
                  "optional": true
                },
                {
                  "name": "endscreen",
                  "type": "text",
                  "label": "Submit screen title",
                  "importance": "low",
                  "default": "Submit screen",
                  "optional": true
                },
                {
                  "name": "defaultAdaptivitySeekLabel",
                  "type": "text",
                  "label": "Default label for adaptivity seek button",
                  "importance": "low",
                  "default": "Continue",
                  "optional": true
                },
                {
                  "name": "continueWithVideo",
                  "type": "text",
                  "label": "Default label for continue video button",
                  "importance": "low",
                  "default": "Continue with video",
                  "optional": true
                },
                {
                  "name": "playbackRate",
                  "type": "text",
                  "label": "Set playback rate",
                  "importance": "low",
                  "default": "Playback Rate",
                  "optional": true
                },
                {
                  "name": "rewind10",
                  "type": "text",
                  "label": "Rewind 10 Seconds",
                  "importance": "low",
                  "default": "Rewind 10 Seconds",
                  "optional": true
                },
                {
                  "name": "navDisabled",
                  "type": "text",
                  "label": "Navigation is disabled text",
                  "importance": "low",
                  "default": "Navigation is disabled",
                  "optional": true
                },
                {
                  "name": "sndDisabled",
                  "type": "text",
                  "label": "Sound is disabled text",
                  "importance": "low",
                  "default": "Sound is disabled",
                  "optional": true
                },
                {
                  "name": "requiresCompletionWarning",
                  "type": "text",
                  "label": "Warning that the user must answer the question correctly before continuing",
                  "importance": "low",
                  "default": "You need to answer all the questions correctly before continuing.",
                  "optional": true
                },
                {
                  "name": "back",
                  "type": "text",
                  "label": "Back button",
                  "importance": "low",
                  "default": "Back",
                  "optional": true
                },
                {
                  "name": "hours",
                  "type": "text",
                  "label": "Passed time hours",
                  "importance": "low",
                  "default": "Hours",
                  "optional": true
                },
                {
                  "name": "minutes",
                  "type": "text",
                  "label": "Passed time minutes",
                  "importance": "low",
                  "default": "Minutes",
                  "optional": true
                },
                {
                  "name": "seconds",
                  "type": "text",
                  "label": "Passed time seconds",
                  "importance": "low",
                  "default": "Seconds",
                  "optional": true
                },
                {
                  "name": "currentTime",
                  "type": "text",
                  "label": "Label for current time",
                  "importance": "low",
                  "default": "Current time:",
                  "optional": true
                },
                {
                  "name": "totalTime",
                  "type": "text",
                  "label": "Label for total time",
                  "importance": "low",
                  "default": "Total time:",
                  "optional": true
                },
                {
                  "name": "singleInteractionAnnouncement",
                  "type": "text",
                  "label": "Text explaining that a single interaction with a name has come into view",
                  "importance": "low",
                  "default": "Interaction appeared:",
                  "optional": true
                },
                {
                  "name": "multipleInteractionsAnnouncement",
                  "type": "text",
                  "label": "Text for explaining that multiple interactions have come into view",
                  "importance": "low",
                  "default": "Multiple interactions appeared.",
                  "optional": true
                },
                {
                  "name": "videoPausedAnnouncement",
                  "type": "text",
                  "label": "Video is paused announcement",
                  "importance": "low",
                  "default": "Video is paused",
                  "optional": true
                },
                {
                  "name": "content",
                  "type": "text",
                  "label": "Content label",
                  "importance": "low",
                  "default": "Content",
                  "optional": true
                },
                {
                  "name": "answered",
                  "type": "text",
                  "label": "Answered message (@answered will be replaced with the number of answered questions)",
                  "importance": "low",
                  "default": "@answered answered",
                  "optional": true
                },
                {
                  "name": "endcardTitle",
                  "type": "text",
                  "label": "Submit screen title",
                  "importance": "low",
                  "default": "@answered Question(s) answered",
                  "description": "@answered will be replaced by the number of answered questions.",
                  "optional": true
                },
                {
                  "name": "endcardInformation",
                  "type": "text",
                  "label": "Submit screen information",
                  "importance": "low",
                  "default": "You have answered @answered questions, click below to submit your answers.",
                  "description": "@answered will be replaced by the number of answered questions.",
                  "optional": true
                },
                {
                  "name": "endcardInformationNoAnswers",
                  "type": "text",
                  "label": "Submit screen information for missing answers",
                  "importance": "low",
                  "default": "You have not answered any questions.",
                  "optional": true
                },
                {
                  "name": "endcardInformationMustHaveAnswer",
                  "type": "text",
                  "label": "Submit screen information for answer needed",
                  "importance": "low",
                  "default": "You have to answer at least one question before you can submit your answers.",
                  "optional": true
                },
                {
                  "name": "endcardSubmitButton",
                  "type": "text",
                  "label": "Submit screen submit button",
                  "importance": "low",
                  "default": "Submit Answers",
                  "optional": true
                },
                {
                  "name": "endcardSubmitMessage",
                  "type": "text",
                  "label": "Submit screen submit message",
                  "importance": "low",
                  "default": "Your answers have been submitted!",
                  "optional": true
                },
                {
                  "name": "endcardTableRowAnswered",
                  "type": "text",
                  "label": "Submit screen table row title: Answered questions",
                  "importance": "low",
                  "default": "Answered questions",
                  "optional": true
                },
                {
                  "name": "endcardTableRowScore",
                  "type": "text",
                  "label": "Submit screen table row title: Score",
                  "importance": "low",
                  "default": "Score",
                  "optional": true
                },
                {
                  "name": "endcardAnsweredScore",
                  "type": "text",
                  "label": "Submit screen answered score",
                  "importance": "low",
                  "default": "answered",
                  "optional": true
                },
                {
                  "name": "endCardTableRowSummaryWithScore",
                  "type": "text",
                  "label": "Submit screen row summary including score (for readspeakers)",
                  "importance": "low",
                  "default": "You got @score out of @total points for the @question that appeared after @minutes minutes and @seconds seconds.",
                  "optional": true
                },
                {
                  "name": "endCardTableRowSummaryWithoutScore",
                  "type": "text",
                  "label": "Submit screen row summary for no score (for readspeakers)",
                  "importance": "low",
                  "default": "You have answered the @question that appeared after @minutes minutes and @seconds seconds.",
                  "optional": true
                }
              ]
            }
          ]';
    }

    //H5P.CoursePresentation-1.22
    private function updatedCoursePresentationSemantics() {
        return '[
            {
              "name": "presentation",
              "type": "group",
              "importance": "high",
              "widget": "coursepresentation",
              "fields": [
                {
                  "name": "slides",
                  "importance": "high",
                  "type": "list",
                  "field": {
                    "name": "slide",
                    "importance": "high",
                    "type": "group",
                    "fields": [
                      {
                        "name": "elements",
                        "importance": "high",
                        "type": "list",
                        "field": {
                          "name": "element",
                          "importance": "high",
                          "type": "group",
                          "fields": [
                            {
                              "name": "x",
                              "importance": "low",
                              "type": "number",
                              "widget": "none"
                            },
                            {
                              "name": "y",
                              "importance": "low",
                              "type": "number",
                              "widget": "none"
                            },
                            {
                              "name": "width",
                              "importance": "low",
                              "type": "number",
                              "widget": "none",
                              "optional": true
                            },
                            {
                              "name": "height",
                              "importance": "low",
                              "type": "number",
                              "widget": "none",
                              "optional": true
                            },
                            {
                              "name": "action",
                              "type": "library",
                              "importance": "high",
                              "options": [
                                "H5P.AdvancedText 1.1",
                                "H5P.Link 1.3",
                                "H5P.Image 1.1",
                                "H5P.Shape 1.0",
                                "H5P.Video 1.5",
                                "H5P.Audio 1.4",
                                "H5P.Blanks 1.12",
                                "H5P.SingleChoiceSet 1.11",
                                "H5P.MultiChoice 1.14",
                                "H5P.TrueFalse 1.6",
                                "H5P.DragQuestion 1.13",
                                "H5P.Summary 1.10",
                                "H5P.DragText 1.8",
                                "H5P.MarkTheWords 1.9",
                                "H5P.Dialogcards 1.8",
                                "H5P.ContinuousText 1.2",
                                "H5P.ExportableTextArea 1.3",
                                "H5P.Table 1.1",
                                "H5P.InteractiveVideo 1.22",
                                "H5P.TwitterUserFeed 1.0"
                              ],
                              "optional": true
                            },
                            {
                              "name": "solution",
                              "type": "text",
                              "widget": "html",
                              "optional": true,
                              "label": "Comments",
                              "importance": "low",
                              "description": "The comments are shown when the user displays the suggested answers for all slides.",
                              "enterMode": "p",
                              "tags": [
                                "strong",
                                "em",
                                "del",
                                "a",
                                "ul",
                                "ol",
                                "h2",
                                "h3",
                                "hr",
                                "pre",
                                "code"
                              ]
                            },
                            {
                              "name": "alwaysDisplayComments",
                              "type": "boolean",
                              "label": "Always display comments",
                              "importance": "low",
                              "optional": true
                            },
                            {
                              "name": "backgroundOpacity",
                              "type": "number",
                              "label": "Background Opacity",
                              "importance": "low",
                              "min": 0,
                              "max": 100,
                              "step": 5,
                              "default": 0,
                              "optional": true
                            },
                            {
                              "name": "displayAsButton",
                              "type": "boolean",
                              "label": "Display as button",
                              "importance": "medium",
                              "default": false,
                              "optional": true
                            },
                            {
                              "name": "buttonSize",
                              "type": "select",
                              "label": "Button size",
                              "importance": "low",
                              "optional": false,
                              "default": "big",
                              "options": [
                                {
                                  "value": "small",
                                  "label": "Small"
                                },
                                {
                                  "value": "big",
                                  "label": "Big"
                                }
                              ]
                            },
                            {
                              "name": "title",
                              "type": "text",
                              "optional": true,
                              "label": "Title",
                              "importance": "medium"
                            },
                            {
                              "name": "goToSlideType",
                              "type": "select",
                              "label": "Go to",
                              "importance": "medium",
                              "optional": false,
                              "options": [
                                {
                                  "value": "specified",
                                  "label": "Specific slide number"
                                },
                                {
                                  "value": "next",
                                  "label": "Next slide"
                                },
                                {
                                  "value": "previous",
                                  "label": "Previous slide"
                                }
                              ],
                              "default": "specified"
                            },
                            {
                              "name": "goToSlide",
                              "type": "number",
                              "label": "Specific slide number",
                              "description": "Only applicable when Specific slide number is selected",
                              "importance": "low",
                              "min": 1,
                              "optional": true
                            },
                            {
                              "name": "invisible",
                              "type": "boolean",
                              "label": "Invisible",
                              "importance": "low",
                              "description": "Default cursor, no title and no tab index. Warning: Users with disabilities or keyboard only users will have trouble using this element.",
                              "default": false
                            }
                          ]
                        }
                      },
                      {
                        "name": "keywords",
                        "importance": "low",
                        "type": "list",
                        "optional": true,
                        "field": {
                          "name": "keyword",
                          "importance": "low",
                          "type": "group",
                          "optional": true,
                          "fields": [
                            {
                              "name": "main",
                              "importance": "low",
                              "type": "text",
                              "optional": true
                            },
                            {
                              "name": "subs",
                              "importance": "low",
                              "type": "list",
                              "optional": true,
                              "field": {
                                "name": "keyword",
                                "importance": "low",
                                "type": "text"
                              }
                            }
                          ]
                        }
                      },
                      {
                        "name": "slideBackgroundSelector",
                        "importance": "medium",
                        "type": "group",
                        "widget": "radioSelector",
                        "fields": [
                          {
                            "name": "imageSlideBackground",
                            "type": "image",
                            "label": "Image",
                            "importance": "medium",
                            "optional": true,
                            "description": "Image background should have a 2:1 width to height ratio to avoid stretching. High resolution images will display better on larger screens."
                          },
                          {
                            "name": "fillSlideBackground",
                            "importance": "medium",
                            "type": "text",
                            "widget": "colorSelector",
                            "label": "Pick a color",
                            "spectrum": {
                              "flat": true,
                              "showInput": true,
                              "allowEmpty": true,
                              "showButtons": false
                            },
                            "default": null,
                            "optional": true
                          }
                        ]
                      }
                    ]
                  }
                },
                {
                  "name": "ct",
                  "importance": "low",
                  "type": "text",
                  "widget": "none",
                  "optional": true,
                  "tags": [
                    "strong",
                    "em",
                    "del",
                    "br",
                    "p",
                    "a",
                    "h2",
                    "h3",
                    "pre",
                    "code"
                  ]
                },
                {
                  "name": "keywordListEnabled",
                  "type": "boolean",
                  "label": "Keyword list",
                  "importance": "low",
                  "default": true
                },
                {
                  "name": "keywordListAlwaysShow",
                  "type": "boolean",
                  "label": "Always show",
                  "importance": "low",
                  "default": false
                },
                {
                  "name": "keywordListAutoHide",
                  "type": "boolean",
                  "label": "Auto hide",
                  "importance": "low",
                  "default": false
                },
                {
                  "name": "keywordListOpacity",
                  "type": "number",
                  "label": "Opacity",
                  "importance": "low",
                  "min": 0,
                  "max": 100,
                  "default": 90
                },
                {
                  "name": "globalBackgroundSelector",
                  "importance": "medium",
                  "type": "group",
                  "widget": "radioSelector",
                  "fields": [
                    {
                      "name": "imageGlobalBackground",
                      "type": "image",
                      "label": "Image",
                      "importance": "medium",
                      "optional": true,
                      "description": "Image background should have a 2:1 width to height ratio to avoid stretching. High resolution images will display better on larger screens."
                    },
                    {
                      "name": "fillGlobalBackground",
                      "type": "text",
                      "widget": "colorSelector",
                      "label": "Pick a color",
                      "importance": "medium",
                      "spectrum": {
                        "flat": true,
                        "showInput": true,
                        "allowEmpty": true,
                        "showButtons": false
                      },
                      "default": null,
                      "optional": true
                    }
                  ]
                }
              ]
            },
            {
              "name": "l10n",
              "type": "group",
              "label": "Localize",
              "importance": "low",
              "common": true,
              "fields": [
                {
                  "name": "slide",
                  "type": "text",
                  "label": "Translation for \"Slide\"",
                  "importance": "low",
                  "default": "Slide"
                },
                {
                  "name": "score",
                  "type": "text",
                  "label": "Translation for \"Score\"",
                  "importance": "low",
                  "default": "Score"
                },
                {
                  "name": "yourScore",
                  "type": "text",
                  "label": "Translation for \"Your Score\"",
                  "importance": "low",
                  "default": "Your Score"
                },
                {
                  "name": "maxScore",
                  "type": "text",
                  "label": "Translation for \"Max Score\"",
                  "importance": "low",
                  "default": "Max Score"
                },
                {
                  "name": "total",
                  "type": "text",
                  "label": "Translation for \"Total\"",
                  "importance": "low",
                  "default": "Total"
                },
                {
                  "name": "totalScore",
                  "type": "text",
                  "label": "Translation for \"Total Score\"",
                  "importance": "low",
                  "default": "Total Score"
                },
                {
                  "name": "showSolutions",
                  "type": "text",
                  "label": "Title for show solutions button",
                  "importance": "low",
                  "default": "Show solutions"
                },
                {
                  "name": "retry",
                  "type": "text",
                  "label": "Text for the retry button",
                  "importance": "low",
                  "default": "Retry",
                  "optional": true
                },
                {
                  "name": "exportAnswers",
                  "type": "text",
                  "label": "Text for the export text button",
                  "importance": "low",
                  "default": "Export text"
                },
                {
                  "name": "hideKeywords",
                  "type": "text",
                  "label": "Hide sidebar navigation menu button title",
                  "importance": "low",
                  "default": "Hide sidebar navigation menu"
                },
                {
                  "name": "showKeywords",
                  "type": "text",
                  "label": "Show sidebar navigation menu button title",
                  "importance": "low",
                  "default": "Show sidebar navigation menu"
                },
                {
                  "name": "fullscreen",
                  "type": "text",
                  "label": "Fullscreen label",
                  "importance": "low",
                  "default": "Fullscreen"
                },
                {
                  "name": "exitFullscreen",
                  "type": "text",
                  "label": "Exit fullscreen label",
                  "importance": "low",
                  "default": "Exit fullscreen"
                },
                {
                  "name": "prevSlide",
                  "type": "text",
                  "label": "Previous slide label",
                  "importance": "low",
                  "default": "Previous slide"
                },
                {
                  "name": "nextSlide",
                  "type": "text",
                  "label": "Next slide label",
                  "importance": "low",
                  "default": "Next slide"
                },
                {
                  "name": "currentSlide",
                  "type": "text",
                  "label": "Current slide label",
                  "importance": "low",
                  "default": "Current slide"
                },
                {
                  "name": "lastSlide",
                  "type": "text",
                  "label": "Last slide label",
                  "importance": "low",
                  "default": "Last slide"
                },
                {
                  "name": "solutionModeTitle",
                  "type": "text",
                  "label": "Exit solution mode text",
                  "importance": "low",
                  "default": "Exit solution mode"
                },
                {
                  "name": "solutionModeText",
                  "type": "text",
                  "label": "Solution mode text",
                  "importance": "low",
                  "default": "Solution Mode"
                },
                {
                  "name": "summaryMultipleTaskText",
                  "type": "text",
                  "label": "Text when multiple tasks on a page",
                  "importance": "low",
                  "default": "Multiple tasks"
                },
                {
                  "name": "scoreMessage",
                  "type": "text",
                  "label": "Score message text",
                  "importance": "low",
                  "default": "You achieved:"
                },
                {
                  "name": "shareFacebook",
                  "type": "text",
                  "label": "Share to Facebook text",
                  "importance": "low",
                  "default": "Share on Facebook"
                },
                {
                  "name": "shareTwitter",
                  "type": "text",
                  "label": "Share to Twitter text",
                  "importance": "low",
                  "default": "Share on Twitter"
                },
                {
                  "name": "shareGoogle",
                  "type": "text",
                  "label": "Share to Google text",
                  "importance": "low",
                  "default": "Share on Google+"
                },
                {
                  "name": "summary",
                  "type": "text",
                  "label": "Title for summary slide",
                  "importance": "low",
                  "default": "Summary"
                },
                {
                  "name": "solutionsButtonTitle",
                  "type": "text",
                  "label": "Title for the comments icon",
                  "importance": "low",
                  "default": "Show comments"
                },
                {
                  "name": "printTitle",
                  "type": "text",
                  "label": "Title for print button",
                  "importance": "low",
                  "default": "Print"
                },
                {
                  "name": "printIngress",
                  "type": "text",
                  "label": "Print dialog ingress",
                  "importance": "low",
                  "default": "How would you like to print this presentation?"
                },
                {
                  "name": "printAllSlides",
                  "type": "text",
                  "label": "Label for \"Print all slides\" button",
                  "importance": "low",
                  "default": "Print all slides"
                },
                {
                  "name": "printCurrentSlide",
                  "type": "text",
                  "label": "Label for \"Print current slide\" button",
                  "importance": "low",
                  "default": "Print current slide"
                },
                {
                  "name": "noTitle",
                  "type": "text",
                  "label": "Label for slides without a title",
                  "importance": "low",
                  "default": "No title"
                },
                {
                  "name": "accessibilitySlideNavigationExplanation",
                  "type": "text",
                  "label": "Explanation of slide navigation for assistive technologies",
                  "importance": "low",
                  "default": "Use left and right arrow to change slide in that direction whenever canvas is selected."
                },
                {
                  "name": "accessibilityCanvasLabel",
                  "type": "text",
                  "label": "Canvas label for assistive technologies",
                  "importance": "low",
                  "default": "Presentation canvas. Use left and right arrow to move between slides."
                },
                {
                  "name": "containsNotCompleted",
                  "type": "text",
                  "label": "Label for uncompleted interactions",
                  "importance": "low",
                  "default": "@slideName contains not completed interaction"
                },
                {
                  "name": "containsCompleted",
                  "type": "text",
                  "label": "Label for completed interactions",
                  "importance": "low",
                  "default": "@slideName contains completed interaction"
                },
                {
                  "name": "slideCount",
                  "type": "text",
                  "label": "Label for slide counter. Variables are @index, @total",
                  "importance": "low",
                  "default": "Slide @index of @total"
                },
                {
                  "name": "containsOnlyCorrect",
                  "type": "text",
                  "label": "Label for slides that only contains correct answers",
                  "importance": "low",
                  "default": "@slideName only has correct answers"
                },
                {
                  "name": "containsIncorrectAnswers",
                  "type": "text",
                  "label": "Label for slides that has incorrect answers",
                  "importance": "low",
                  "default": "@slideName has incorrect answers"
                },
                {
                  "name": "shareResult",
                  "type": "text",
                  "label": "Label for social sharing bar",
                  "importance": "low",
                  "default": "Share Result"
                },
                {
                  "name": "accessibilityTotalScore",
                  "type": "text",
                  "label": "Total score announcement for assistive technologies",
                  "default": "You got @score of @maxScore points in total",
                  "description": "Available variables are @score and @maxScore"
                },
                {
                  "name": "accessibilityEnteredFullscreen",
                  "type": "text",
                  "label": "Entered fullscreen announcement for assistive technologies",
                  "default": "Entered fullscreen"
                },
                {
                  "name": "accessibilityExitedFullscreen",
                  "type": "text",
                  "label": "Exited fullscreen announcement for assistive technologies",
                  "default": "Exited fullscreen"
                }
              ]
            },
            {
              "name": "override",
              "type": "group",
              "label": "Behavior settings.",
              "importance": "low",
              "description": "These options will let you override behaviour settings.",
              "optional": true,
              "fields": [
                {
                  "name": "activeSurface",
                  "type": "boolean",
                  "widget": "disposableBoolean",
                  "label": "Activate Active Surface Mode",
                  "importance": "low",
                  "description": "Removes navigation controls for the end user. Use Go To Slide to navigate.",
                  "default": false
                },
                {
                  "name": "hideSummarySlide",
                  "type": "boolean",
                  "label": "Hide Summary Slide",
                  "importance": "low",
                  "description": "Hides the summary slide.",
                  "default": false
                },
                {
                  "name": "showSolutionButton",
                  "type": "select",
                  "label": "Override \"Show Solution\" button",
                  "importance": "low",
                  "description": "This option determines if the \"Show Solution\" button will be configured for each question individually (default) shown for all questions (Enabled) or disabled for all questions (Disabled) ",
                  "optional": true,
                  "options": [
                    {
                      "value": "on",
                      "label": "Enabled"
                    },
                    {
                      "value": "off",
                      "label": "Disabled"
                    }
                  ]
                },
                {
                  "name": "retryButton",
                  "type": "select",
                  "label": "Override \"Retry\" button",
                  "importance": "low",
                  "description": "This option determines if the \"Retry\" button will be configured for each question individually (default) shown for all questions (Enabled) or disabled for all questions (Disabled)",
                  "optional": true,
                  "options": [
                    {
                      "value": "on",
                      "label": "Enabled"
                    },
                    {
                      "value": "off",
                      "label": "Disabled"
                    }
                  ]
                },
                {
                  "name": "summarySlideSolutionButton",
                  "type": "boolean",
                  "label": "Show \"Show solution\" button in the summary slide",
                  "description": "If enabled, the learner will be able to show the solutions for all question when they reach the summary slide",
                  "default": true,
                  "importance": "low",
                  "widget": "showWhen",
                  "showWhen": {
                    "rules": [
                      {
                        "field": "hideSummarySlide",
                        "equals": false
                      }
                    ]
                  }
                },
                {
                  "name": "summarySlideRetryButton",
                  "type": "boolean",
                  "label": "Show \"Retry\" button in the summary slide",
                  "description": "If enabled, the learner will be able to retry all questions when they reach the summary slide. Be advised that by refreshing the page the learners will be able to retry even if this button isnt showing.",
                  "default": true,
                  "importance": "low",
                  "widget": "showWhen",
                  "showWhen": {
                    "rules": [
                      {
                        "field": "hideSummarySlide",
                        "equals": false
                      }
                    ]
                  }
                },
                {
                  "name": "enablePrintButton",
                  "type": "boolean",
                  "label": "Enable print button",
                  "importance": "low",
                  "description": "Enables the print button.",
                  "default": false
                },
                {
                  "name": "social",
                  "type": "group",
                  "label": "Social Settings",
                  "widget": "showWhen",
                  "showWhen": {
                    "rules": [
                      {
                        "field": "hideSummarySlide",
                        "equals": false
                      }
                    ]
                  },
                  "importance": "low",
                  "description": "These options will let you override social behaviour settings. Empty values will be filled in automatically if a link is provided, otherwise all values will be generated.",
                  "optional": true,
                  "fields": [
                    {
                      "name": "showFacebookShare",
                      "type": "boolean",
                      "label": "Display Facebook share icon",
                      "importance": "low",
                      "default": false
                    },
                    {
                      "name": "facebookShare",
                      "importance": "low",
                      "type": "group",
                      "expanded": true,
                      "label": "Facebook share settings",
                      "widget": "showWhen",
                      "showWhen": {
                        "rules": [
                          {
                            "field": "showFacebookShare",
                            "equals": true
                          }
                        ]
                      },
                      "fields": [
                        {
                          "name": "url",
                          "type": "text",
                          "label": "Share to Facebook link",
                          "importance": "low",
                          "default": "@currentpageurl"
                        },
                        {
                          "name": "quote",
                          "type": "text",
                          "label": "Share to Facebook quote",
                          "importance": "low",
                          "default": "I scored @score out of @maxScore on a task at @currentpageurl."
                        }
                      ]
                    },
                    {
                      "name": "showTwitterShare",
                      "type": "boolean",
                      "label": "Display Twitter share icon",
                      "importance": "low",
                      "default": false
                    },
                    {
                      "name": "twitterShare",
                      "importance": "low",
                      "type": "group",
                      "expanded": true,
                      "label": "Twitter share settings",
                      "widget": "showWhen",
                      "showWhen": {
                        "rules": [
                          {
                            "field": "showTwitterShare",
                            "equals": true
                          }
                        ]
                      },
                      "fields": [
                        {
                          "name": "statement",
                          "type": "text",
                          "label": "Share to Twitter statement",
                          "importance": "low",
                          "default": "I scored @score out of @maxScore on a task at @currentpageurl."
                        },
                        {
                          "name": "url",
                          "type": "text",
                          "label": "Share to Twitter link",
                          "importance": "low",
                          "default": "@currentpageurl"
                        },
                        {
                          "name": "hashtags",
                          "type": "text",
                          "label": "Share to Twitter hashtags",
                          "importance": "low",
                          "default": "h5p, course"
                        }
                      ]
                    },
                    {
                      "name": "showGoogleShare",
                      "type": "boolean",
                      "label": "Display Google+ share icon",
                      "importance": "low",
                      "default": false
                    },
                    {
                      "name": "googleShareUrl",
                      "type": "text",
                      "label": "Share to Google link",
                      "importance": "low",
                      "default": "@currentpageurl",
                      "widget": "showWhen",
                      "showWhen": {
                        "rules": [
                          {
                            "field": "showGoogleShare",
                            "equals": true
                          }
                        ]
                      }
                    }
                  ]
                }
              ]
            }
          ]';
    }

    //H5P.Blanks-1.14
    private function updatedBlanksSemantics() {
      return '[
        {
          "name": "media",
          "type": "group",
          "label": "Media",
          "importance": "medium",
          "fields": [
            {
              "name": "type",
              "type": "library",
              "label": "Type",
              "options": [
                "H5P.Image 1.1",
                "H5P.Video 1.6",
                "H5P.Audio 1.5"
              ],
              "optional": true,
              "description": "Optional media to display above the question."
            },
            {
              "name": "disableImageZooming",
              "type": "boolean",
              "label": "Disable image zooming",
              "importance": "low",
              "default": false,
              "optional": true,
              "widget": "showWhen",
              "showWhen": {
                "rules": [
                  {
                    "field": "type",
                    "equals": "H5P.Image 1.1"
                  }
                ]
              }
            }
          ]
        },
        {
          "label": "Task description",
          "importance": "high",
          "name": "text",
          "type": "text",
          "widget": "html",
          "default": "Fill in the missing words",
          "description": "A guide telling the user how to answer this task.",
          "enterMode": "p",
          "tags": [
            "strong",
            "em",
            "u",
            "a",
            "ul",
            "ol",
            "h2",
            "h3",
            "hr",
            "pre",
            "code"
          ]
        },
        {
          "name": "questions",
          "type": "list",
          "label": "Text blocks",
          "importance": "high",
          "entity": "text block",
          "min": 1,
          "max": 31,
          "field": {
            "name": "question",
            "type": "text",
            "widget": "html",
            "label": "Line of text",
            "importance": "high",
            "placeholder": "Oslo is the capital of *Norway*.",
            "description": "",
            "important": {
              "description": "<ul><li>Blanks are added with an asterisk (*) in front and behind the correct word/phrase.</li><li>Alternative answers are separated with a forward slash (/).</li><li>You may add a textual tip, using a colon (:) in front of the tip.</li></ul>",
              "example": "H5P content may be edited using a *browser/web-browser:Something you use every day*."
            },
            "enterMode": "p",
            "tags": [
              "strong",
              "em",
              "del",
              "u",
              "code"
            ]
          }
        },
        {
          "name": "overallFeedback",
          "type": "group",
          "label": "Overall Feedback",
          "importance": "low",
          "expanded": true,
          "fields": [
            {
              "name": "overallFeedback",
              "type": "list",
              "widgets": [
                {
                  "name": "RangeList",
                  "label": "Default"
                }
              ],
              "importance": "high",
              "label": "Define custom feedback for any score range",
              "description": "Click the \"Add range\" button to add as many ranges as you need. Example: 0-20% Bad score, 21-91% Average Score, 91-100% Great Score!",
              "entity": "range",
              "min": 1,
              "defaultNum": 1,
              "optional": true,
              "field": {
                "name": "overallFeedback",
                "type": "group",
                "importance": "low",
                "fields": [
                  {
                    "name": "from",
                    "type": "number",
                    "label": "Score Range",
                    "min": 0,
                    "max": 100,
                    "default": 0,
                    "unit": "%"
                  },
                  {
                    "name": "to",
                    "type": "number",
                    "min": 0,
                    "max": 100,
                    "default": 100,
                    "unit": "%"
                  },
                  {
                    "name": "feedback",
                    "type": "text",
                    "label": "Feedback for defined score range",
                    "importance": "low",
                    "placeholder": "Fill in the feedback",
                    "optional": true
                  }
                ]
              }
            }
          ]
        },
        {
          "label": "Text for \"Show solutions\" button",
          "name": "showSolutions",
          "type": "text",
          "default": "Show solution",
          "common": true
        },
        {
          "label": "Text for \"Retry\" button",
          "importance": "low",
          "name": "tryAgain",
          "type": "text",
          "default": "Retry",
          "common": true,
          "optional": true
        },
        {
          "label": "Text for \"Check\" button",
          "importance": "low",
          "name": "checkAnswer",
          "type": "text",
          "default": "Check",
          "common": true,
          "optional": true
        },
        {
          "label": "Text for \"Submit\" button",
          "importance": "low",
          "name": "submitAnswer",
          "type": "text",
          "default": "Submit",
          "common": true,
          "optional": true
        },
        {
          "label": "Text for \"Not filled out\" message",
          "importance": "low",
          "name": "notFilledOut",
          "type": "text",
          "default": "Please fill in all blanks to view solution",
          "common": true,
          "optional": true
        },
        {
          "label": "Text for \":ans is correct\" message",
          "importance": "low",
          "name": "answerIsCorrect",
          "type": "text",
          "default": ":ans is correct",
          "common": true,
          "optional": true
        },
        {
          "label": "Text for \":ans is wrong\" message",
          "importance": "low",
          "name": "answerIsWrong",
          "type": "text",
          "default": ":ans is wrong",
          "common": true,
          "optional": true
        },
        {
          "label": "Text for \"Answered correctly\" message",
          "importance": "low",
          "name": "answeredCorrectly",
          "type": "text",
          "default": "Answered correctly",
          "common": true,
          "optional": true
        },
        {
          "label": "Text for \"Answered incorrectly\" message",
          "importance": "low",
          "name": "answeredIncorrectly",
          "type": "text",
          "default": "Answered incorrectly",
          "common": true,
          "optional": true
        },
        {
          "label": "Assistive technology label for solution",
          "importance": "low",
          "name": "solutionLabel",
          "type": "text",
          "default": "Correct answer:",
          "common": true,
          "optional": true
        },
        {
          "label": "Assistive technology label for input field",
          "importance": "low",
          "name": "inputLabel",
          "type": "text",
          "description": "Use @num and @total to replace current cloze number and total cloze number",
          "default": "Blank input @num of @total",
          "common": true,
          "optional": true
        },
        {
          "label": "Assistive technology label for saying an input has a tip tied to it",
          "importance": "low",
          "name": "inputHasTipLabel",
          "type": "text",
          "default": "Tip available",
          "common": true,
          "optional": true
        },
        {
          "label": "Tip icon label",
          "importance": "low",
          "name": "tipLabel",
          "type": "text",
          "default": "Tip",
          "common": true,
          "optional": true
        },
        {
          "name": "behaviour",
          "type": "group",
          "label": "Behavior settings.",
          "importance": "low",
          "description": "These options will let you control how the task behaves.",
          "optional": true,
          "fields": [
            {
              "label": "Enable \"Retry\"",
              "importance": "low",
              "name": "enableRetry",
              "type": "boolean",
              "default": true,
              "optional": true
            },
            {
              "label": "Enable \"Show solution\" button",
              "importance": "low",
              "name": "enableSolutionsButton",
              "type": "boolean",
              "default": true,
              "optional": true
            },
            {
              "name": "enableCheckButton",
              "type": "boolean",
              "label": "Enable \"Check\" button",
              "widget": "none",
              "importance": "low",
              "default": true,
              "optional": true
            },
            {
              "label": "Automatically check answers after input",
              "importance": "low",
              "name": "autoCheck",
              "type": "boolean",
              "default": false,
              "optional": true
            },
            {
              "name": "caseSensitive",
              "importance": "low",
              "type": "boolean",
              "default": true,
              "label": "Case sensitive",
              "description": "Makes sure the user input has to be exactly the same as the answer."
            },
            {
              "label": "Require all fields to be answered before the solution can be viewed",
              "importance": "low",
              "name": "showSolutionsRequiresInput",
              "type": "boolean",
              "default": true,
              "optional": true
            },
            {
              "label": "Put input fields on separate lines",
              "importance": "low",
              "name": "separateLines",
              "type": "boolean",
              "default": false,
              "optional": true
            },
            {
              "label": "Show confirmation dialog on \"Check\"",
              "importance": "low",
              "name": "confirmCheckDialog",
              "type": "boolean",
              "description": "This options is not compatible with the \"Automatically check answers after input\" option",
              "default": false
            },
            {
              "label": "Show confirmation dialog on \"Retry\"",
              "importance": "low",
              "name": "confirmRetryDialog",
              "type": "boolean",
              "default": false
            },
            {
              "name": "acceptSpellingErrors",
              "type": "boolean",
              "label": "Accept minor spelling errors",
              "importance": "low",
              "description": "If activated, an answer will also count as correct with minor spelling errors (3-9 characters: 1 spelling error, more than 9 characters: 2 spelling errors)",
              "default": false,
              "optional": true
            }
          ]
        },
        {
          "name": "currikisettings",
          "type": "group",
          "label": "Curriki settings",
          "importance": "low",
          "description": "These options will let you control how the curriki studio behaves.",
          "optional": true,
          "fields": [
            {
              "label": "Do not Show Submit Button",
              "importance": "low",
              "name": "disableSubmitButton",
              "type": "boolean",
              "default": false,
              "optional": true,
              "description": "This option only applies to a standalone activity. The Submit button is required for grade passback to an LMS."
            },
            {
              "label": "Placeholder",
              "importance": "low",
              "name": "placeholder",
              "type": "boolean",
              "default": false,
              "optional": true,
              "description": "This option is a place holder. will be used in future"
            },
            {
              "label": "Curriki Localization",
              "description": "Here you can edit settings or translate texts used in curriki settings",
              "importance": "low",
              "name": "currikil10n",
              "type": "group",
              "fields": [
                {
                  "label": "Text for \"Submit\" button",
                  "name": "submitAnswer",
                  "type": "text",
                  "default": "Submit",
                  "optional": true
                },
                {
                  "label": "Text for \"Placeholder\" button",
                  "importance": "low",
                  "name": "placeholderButton",
                  "type": "text",
                  "default": "Placeholder",
                  "optional": true
                }
              ]
            }
          ]
        },
        {
          "label": "Check confirmation dialog",
          "importance": "low",
          "name": "confirmCheck",
          "type": "group",
          "common": true,
          "fields": [
            {
              "label": "Header text",
              "importance": "low",
              "name": "header",
              "type": "text",
              "default": "Finish ?"
            },
            {
              "label": "Body text",
              "importance": "low",
              "name": "body",
              "type": "text",
              "default": "Are you sure you wish to finish ?",
              "widget": "html",
              "enterMode": "p",
              "tags": [
                "strong",
                "em",
                "del",
                "u",
                "code"
              ]
            },
            {
              "label": "Cancel button label",
              "importance": "low",
              "name": "cancelLabel",
              "type": "text",
              "default": "Cancel"
            },
            {
              "label": "Confirm button label",
              "importance": "low",
              "name": "confirmLabel",
              "type": "text",
              "default": "Finish"
            }
          ]
        },
        {
          "label": "Retry confirmation dialog",
          "importance": "low",
          "name": "confirmRetry",
          "type": "group",
          "common": true,
          "fields": [
            {
              "label": "Header text",
              "importance": "low",
              "name": "header",
              "type": "text",
              "default": "Retry ?"
            },
            {
              "label": "Body text",
              "importance": "low",
              "name": "body",
              "type": "text",
              "default": "Are you sure you wish to retry ?",
              "widget": "html",
              "enterMode": "p",
              "tags": [
                "strong",
                "em",
                "del",
                "u",
                "code"
              ]
            },
            {
              "label": "Cancel button label",
              "importance": "low",
              "name": "cancelLabel",
              "type": "text",
              "default": "Cancel"
            },
            {
              "label": "Confirm button label",
              "importance": "low",
              "name": "confirmLabel",
              "type": "text",
              "default": "Confirm"
            }
          ]
        },
        {
          "name": "scoreBarLabel",
          "type": "text",
          "label": "Textual representation of the score bar for those using a readspeaker",
          "default": "You got :num out of :total points",
          "importance": "low",
          "common": true
        },
        {
          "name": "a11yCheck",
          "type": "text",
          "label": "Assistive technology description for \"Check\" button",
          "default": "Check the answers. The responses will be marked as correct, incorrect, or unanswered.",
          "importance": "low",
          "common": true
        },
        {
          "name": "a11yShowSolution",
          "type": "text",
          "label": "Assistive technology description for \"Show Solution\" button",
          "default": "Show the solution. The task will be marked with its correct solution.",
          "importance": "low",
          "common": true
        },
        {
          "name": "a11yRetry",
          "type": "text",
          "label": "Assistive technology description for \"Retry\" button",
          "default": "Retry the task. Reset all responses and start the task over again.",
          "importance": "low",
          "common": true
        },
        {
          "name": "a11yCheckingModeHeader",
          "type": "text",
          "label": "Assistive technology description for starting task",
          "default": "Checking mode",
          "importance": "low",
          "common": true
        }
      ]
      ';
    }   

    //H5P.AdvancedBlanks-1.0
    private function updatedAdvancedBlanksSemantics() {
      return '[
        {
          "name": "media",
          "type": "group",
          "label": "Media",
          "importance": "medium",
          "fields": [
            {
              "name": "type",
              "type": "library",
              "label": "Type",
              "options": [
                "H5P.Image 1.1",
                "H5P.Video 1.5"
              ],
              "optional": true,
              "description": "Optional media to display above the question."
            }
          ]
        },
        {
          "name": "content",
          "type": "group",
          "label": "Blank content",
          "importance": "medium",
          "expanded": true,
          "fields": [
            {
              "label": "Task description",
              "importance": "high",
              "name": "task",
              "type": "text",
              "widget": "html",
              "default": "Fill in the missing words.",
              "description": "A guide telling the user how to answer this task.",
              "enterMode": "p",
              "tags": [
                "strong",
                "em",
                "u",
                "a",
                "ul",
                "ol",
                "h1",
                "h2",
                "h3",
                "hr"
              ]
            },
            {
              "name": "blanksText",
              "type": "text",
              "widget": "html",
              "label": "Text with blanks",
              "importance": "high",
              "enterMode": "p",
              "important": {
                "description": "<ul><li>Blanks must be marked with __________ (three or more underscores).</li><li>Do not put the solutions into the text.</li></ul>",
                "example": "I have _________ wanted to visit Norway."
              },
              "description": "",
              "tags": [
                "strong",
                "em",
                "u",
                "strike",
                "ul",
                "ol",
                "table",
                "h1",
                "h2",
                "h3",
                "hr",
                "sub",
                "sup"
              ],
              "font": {
                "size": true,
                "family": true,
                "color": true,
                "background": true
              }
            },
            {
              "name": "blanksList",
              "type": "list",
              "label": "Blanks used in the text",
              "importance": "high",
              "entity": "blank",
              "min": 1,
              "widgets": [
                {
                  "name": "VerticalTabs",
                  "label": "Default"
                }
              ],
              "field": {
                "name": "blankGroup",
                "type": "group",
                "label": "Blank",
                "fields": [
                  {
                    "name": "correctAnswerText",
                    "type": "text",
                    "label": "Correct answer",
                    "description": "You can separate alternative answers with a slash (/)."
                  },
                  {
                    "name": "hint",
                    "type": "text",
                    "label": "Hint",
                    "optional": true
                  },
                  {
                    "name": "incorrectAnswersList",
                    "type": "list",
                    "label": "Incorrect answers",
                    "entity": "incorrect answer",
                    "optional": true,
                    "min": 0,
                    "field": {
                      "name": "incorrectAnswerGroup",
                      "type": "group",
                      "label": "Incorrect answer",
                      "description": "You can separate alternative answers with a slash (/).",
                      "fields": [
                        {
                          "name": "incorrectAnswerText",
                          "type": "text",
                          "label": "Incorrect answer text"
                        },
                        {
                          "name": "incorrectAnswerFeedback",
                          "type": "text",
                          "label": "Feedback",
                          "optional": true,
                          "description": "The feedback should help the user find the correct answer and ideally be tailored to the answer the user has entered.",
                          "widget": "html",
                          "tags": [
                            "strong",
                            "em",
                            "u",
                            "a",
                            "ul",
                            "ol",
                            "sub",
                            "sup"
                          ]
                        },
                        {
                          "name": "showHighlight",
                          "type": "boolean",
                          "label": "Show highlight in the text when feedback is shown",
                          "description": "Put !! before and after a piece of text to mark it as a highlight. (e.g. This is !!a highlight!!)",
                          "default": false,
                          "optional": false
                        },
                        {
                          "name": "highlight",
                          "type": "select",
                          "label": "Highlight position relative to blank:",
                          "widget": "showWhen",
                          "showWhen": {
                            "rules": [
                              {
                                "field": "showHighlight",
                                "equals": true
                              }
                            ]
                          },
                          "options": [
                            {
                              "value": -1,
                              "label": "- 1 (right before the blank)"
                            },
                            {
                              "value": -2,
                              "label": "- 2 (two highlights before the blank)"
                            },
                            {
                              "value": -3,
                              "label": "- 3 (three highlights before the blank)"
                            },
                            {
                              "value": 1,
                              "label": "+ 1 (right after the blank)"
                            },
                            {
                              "value": 2,
                              "label": "+ 2 (two highlights after the blank)"
                            },
                            {
                              "value": 3,
                              "label": "+ 3 (three highlights after the blank)"
                            }
                          ],
                          "default": -1
                        }
                      ]
                    }
                  }
                ]
              }
            }
          ]
        },
        {
          "name": "snippets",
          "type": "group",
          "label": "Snippets",
          "importance": "medium",
          "fields": [
            {
              "name": "list",
              "type": "list",
              "label": "Snippet list",
              "importance": "high",
              "description": "Snippets are texts that can be reused in feedback texts by inserting @snippetname into the it.",
              "entity": "snippet",
              "optional": true,
              "min": 0,
              "field": {
                "name": "snippetGroup",
                "type": "group",
                "label": "Snippet",
                "fields": [
                  {
                    "name": "snippetName",
                    "type": "text",
                    "label": "Name",
                    "description": "You can only use letters and numbers for the snippet name.",
                    "regexp": {
                      "pattern": "^[\\w\\d]*$"
                    }
                  },
                  {
                    "name": "snippetText",
                    "type": "text",
                    "label": "Text",
                    "widget": "html",
                    "tags": [
                      "strong",
                      "em",
                      "u",
                      "a",
                      "ul",
                      "ol",
                      "sub",
                      "sup"
                    ]
                  }
                ]
              }
            }
          ]
        },
        {
          "name": "overallFeedback",
          "type": "group",
          "label": "Overall Feedback",
          "importance": "low",
          "expanded": true,
          "fields": [
            {
              "name": "overallFeedback",
              "type": "list",
              "widgets": [
                {
                  "name": "RangeList",
                  "label": "Default"
                }
              ],
              "importance": "high",
              "label": "Define custom feedback for any score range",
              "description": "Click the \"Add range\" button to add as many ranges as you need. Example: 0-20% Bad score, 21-91% Average Score, 91-100% Great Score!",
              "entity": "range",
              "min": 1,
              "defaultNum": 1,
              "optional": true,
              "field": {
                "name": "overallFeedback",
                "type": "group",
                "importance": "low",
                "fields": [
                  {
                    "name": "from",
                    "type": "number",
                    "label": "Score Range",
                    "min": 0,
                    "max": 100,
                    "default": 0,
                    "unit": "%"
                  },
                  {
                    "name": "to",
                    "type": "number",
                    "min": 0,
                    "max": 100,
                    "default": 100,
                    "unit": "%"
                  },
                  {
                    "name": "feedback",
                    "type": "text",
                    "label": "Feedback for defined score range",
                    "importance": "low",
                    "placeholder": "Fill in the feedback",
                    "optional": true
                  }
                ]
              }
            }
          ]
        },
        {
          "name": "behaviour",
          "type": "group",
          "label": "Behavior settings",
          "importance": "low",
          "description": "These options will let you control how the task behaves.",
          "optional": false,
          "fields": [
            {
              "name": "mode",
              "type": "select",
              "label": "Answer mode",
              "description": "Indicates in what way the user gives answers.",
              "optional": false,
              "options": [
                {
                  "value": "selection",
                  "label": "The users selects from options."
                },
                {
                  "value": "typing",
                  "label": "The users types in the answers."
                }
              ],
              "default": "typing"
            },
            {
              "name": "selectAlternatives",
              "type": "select",
              "label": "Alternatives offered for selection",
              "optional": false,
              "widget": "showWhen",
              "showWhen": {
                "rules": [
                  {
                    "field": "mode",
                    "equals": "selection"
                  }
                ]
              },
              "options": [
                {
                  "value": "alternatives",
                  "label": "The incorrect answers entered for the blank"
                },
                {
                  "value": "all",
                  "label": "The correct answers of all other blanks"
                }
              ],
              "default": "alternatives"
            },
            {
              "name": "selectAlternativeRestriction",
              "type": "number",
              "label": "Maximum number of alternatives of other blanks offered for selection",
              "description": "Enter 0 to set no limit.",
              "min": 0,
              "step": 1,
              "default": 5,
              "widget": "showWhen",
              "showWhen": {
                "rules": [
                  {
                    "field": "mode",
                    "equals": "selection"
                  }
                ]
              }
            },
            {
              "name": "spellingErrorBehaviour",
              "type": "select",
              "label": "Behaviour when user makes a spelling error",
              "importance": "low",
              "options": [
                {
                  "value": "accept",
                  "label": "Accept it as a correct answer"
                },
                {
                  "value": "warn",
                  "label": "Warn the user about the error"
                },
                {
                  "value": "mistake",
                  "label": "Consider it a regular mistake"
                }
              ],
              "default": "mistake",
              "widget": "showWhen",
              "showWhen": {
                "rules": [
                  {
                    "field": "mode",
                    "equals": "typing"
                  }
                ]
              }
            },
            {
              "name": "caseSensitive",
              "importance": "low",
              "type": "boolean",
              "default": false,
              "label": "Case sensitive",
              "description": "If enabled, capitalization that is different from the solution is considered an error.",
              "widget": "showWhen",
              "showWhen": {
                "rules": [
                  {
                    "field": "mode",
                    "equals": "typing"
                  }
                ]
              }
            },
            {
              "label": "Automatically check answers after input",
              "importance": "low",
              "name": "autoCheck",
              "type": "boolean",
              "default": false,
              "optional": true
            },
            {
              "label": "Enable \"Show solutions\" button",
              "importance": "low",
              "name": "enableSolutionsButton",
              "type": "boolean",
              "default": true,
              "optional": true
            },
            {
              "label": "Require all fields to be answered before the solution can be viewed",
              "importance": "low",
              "name": "showSolutionsRequiresInput",
              "type": "boolean",
              "default": true,
              "optional": true
            },
            {
              "label": "Enable \"Retry\"",
              "importance": "low",
              "name": "enableRetry",
              "type": "boolean",
              "default": true,
              "optional": true
            },
            {
              "name": "enableCheckButton",
              "type": "boolean",
              "label": "Enable \"Check\" button",
              "widget": "none",
              "importance": "low",
              "default": true,
              "optional": true
            },
            {
              "label": "Disable image zooming for question image",
              "importance": "low",
              "name": "disableImageZooming",
              "type": "boolean",
              "default": false,
              "optional": true
            },
            {
              "label": "Show confirmation dialog on \"Check\"",
              "importance": "low",
              "name": "confirmCheckDialog",
              "type": "boolean",
              "description": "This options is not compatible with the \"Automatically check answers after input\" option",
              "default": false
            },
            {
              "label": "Show confirmation dialog on \"Retry\"",
              "importance": "low",
              "name": "confirmRetryDialog",
              "type": "boolean",
              "default": false
            }
          ]
        },
        {
          "name": "currikisettings",
          "type": "group",
          "label": "Curriki settings",
          "importance": "low",
          "description": "These options will let you control how the curriki studio behaves.",
          "optional": true,
          "fields": [
            {
              "label": "Do not Show Submit Button",
              "importance": "low",
              "name": "disableSubmitButton",
              "type": "boolean",
              "default": false,
              "optional": true,
              "description": "This option only applies to a standalone activity. The Submit button is required for grade passback to an LMS."
            },
            {
              "label": "Placeholder",
              "importance": "low",
              "name": "placeholder",
              "type": "boolean",
              "default": false,
              "optional": true,
              "description": "This option is a place holder. will be used in future"
            },
            {
              "label": "Curriki Localization",
              "description": "Here you can edit settings or translate texts used in curriki settings",
              "importance": "low",
              "name": "currikil10n",
              "type": "group",
              "fields": [
                {
                  "label": "Text for \"Submit\" button",
                  "name": "submitAnswer",
                  "type": "text",
                  "default": "Submit",
                  "optional": true
                },
                {
                  "label": "Text for \"Placeholder\" button",
                  "importance": "low",
                  "name": "placeholderButton",
                  "type": "text",
                  "default": "Placeholder",
                  "optional": true
                }
              ]
            }
          ]
        },
        {
          "label": "Text for \"Show solutions\" button",
          "name": "showSolutions",
          "type": "text",
          "default": "Show solution",
          "common": true,
          "optional": true
        },
        {
          "label": "Text for \"Retry\" button",
          "importance": "low",
          "name": "tryAgain",
          "type": "text",
          "default": "Retry",
          "common": true,
          "optional": true
        },
        {
          "label": "Text for \"Check\" button",
          "importance": "low",
          "name": "checkAnswer",
          "type": "text",
          "default": "Check",
          "common": true,
          "optional": true
        },
        {
          "label": "Text for \"Not filled out\" message",
          "importance": "low",
          "name": "notFilledOut",
          "type": "text",
          "default": "Please fill in all blanks to view solution",
          "common": true,
          "optional": true
        },
        {
          "label": "Tip icon label",
          "importance": "low",
          "name": "tipLabel",
          "type": "text",
          "default": "Tip",
          "common": true,
          "optional": true
        },
        {
          "label": "Spelling mistake warning",
          "description": "This is the message shown to users when they make a spelling mistake. Insert @mistake to show them what they did wrong.",
          "importance": "low",
          "name": "spellingMistakeWarning",
          "type": "text",
          "default": "Check your spelling: @mistake",
          "common": true,
          "optional": true
        },
        {
          "label": "Check confirmation dialog",
          "importance": "low",
          "name": "confirmCheck",
          "type": "group",
          "common": true,
          "fields": [
            {
              "label": "Header text",
              "importance": "low",
              "name": "header",
              "type": "text",
              "default": "Finish?"
            },
            {
              "label": "Body text",
              "importance": "low",
              "name": "body",
              "type": "text",
              "default": "Are you sure you wish to finish?",
              "widget": "html",
              "enterMode": "p",
              "tags": [
                "strong",
                "em",
                "del",
                "u"
              ]
            },
            {
              "label": "Cancel button label",
              "importance": "low",
              "name": "cancelLabel",
              "type": "text",
              "default": "Cancel"
            },
            {
              "label": "Confirm button label",
              "importance": "low",
              "name": "confirmLabel",
              "type": "text",
              "default": "Finish"
            }
          ]
        },
        {
          "label": "Retry confirmation dialog",
          "importance": "low",
          "name": "confirmRetry",
          "type": "group",
          "common": true,
          "fields": [
            {
              "label": "Header text",
              "importance": "low",
              "name": "header",
              "type": "text",
              "default": "Retry?"
            },
            {
              "label": "Body text",
              "importance": "low",
              "name": "body",
              "type": "text",
              "default": "Are you sure you wish to retry?",
              "widget": "html",
              "enterMode": "p",
              "tags": [
                "strong",
                "em",
                "del",
                "u"
              ]
            },
            {
              "label": "Cancel button label",
              "importance": "low",
              "name": "cancelLabel",
              "type": "text",
              "default": "Cancel"
            },
            {
              "label": "Confirm button label",
              "importance": "low",
              "name": "confirmLabel",
              "type": "text",
              "default": "Confirm"
            }
          ]
        },
        {
          "name": "scoreBarLabel",
          "type": "text",
          "label": "Textual representation of the score bar for those using a readspeaker",
          "default": "You got :num out of :total points",
          "importance": "low",
          "common": true
        }
      ]
      ';
    }

    //H5P.Agamotto-1.5
    private function updatedAgamottoSemantics() {
      return '[
        {
          "name": "title",
          "label": "Heading",
          "importance": "high",
          "type": "text",
          "optional": true,
          "placeholder": "Here you can add an optional heading.",
          "description": "The heading youd like to show above the image"
        },
        {
          "name": "items",
          "type": "list",
          "label": "Items",
          "entity": "item",
          "widgets": [
            {
              "name": "VerticalTabs",
              "label": "Default"
            }
          ],
          "importance": "medium",
          "min": 2,
          "max": 50,
          "field": {
            "name": "item",
            "type": "group",
            "label": "Item",
            "importance": "low",
            "expanded": true,
            "fields": [
              {
                "name": "image",
                "type": "library",
                "label": "Image",
                "importance": "low",
                "options": [
                  "H5P.Image 1.1"
                ],
                "optional": false
              },
              {
                "name": "labelText",
                "label": "Label",
                "importance": "low",
                "type": "text",
                "optional": true,
                "description": "Optional label for a tick. Please make sure its not too long, or it will be hidden."
              },
              {
                "name": "description",
                "type": "text",
                "importance": "low",
                "widget": "html",
                "label": "Description",
                "optional": true,
                "placeholder": "My image description ...",
                "description": "Optional description for the image",
                "enterMode": "p",
                "tags": [
                  "strong",
                  "em",
                  "sub",
                  "sup",
                  "h3",
                  "h4",
                  "ul",
                  "ol",
                  "a",
                  "pre",
                  "code"
                ]
              }
            ]
          }
        },
        {
          "name": "behaviour",
          "type": "group",
          "label": "Behavior settings",
          "importance": "low",
          "description": "These options will let you control how the task behaves.",
          "fields": [
            {
              "name": "startImage",
              "importance": "medium",
              "type": "number",
              "label": "Start image",
              "description": "Set the number of the image to start with.",
              "default": 1,
              "min": 1,
              "max": 50
            },
            {
              "name": "snap",
              "importance": "medium",
              "type": "boolean",
              "label": "Snap slider",
              "description": "If activated, the slider will snap to an images position.",
              "default": true
            },
            {
              "name": "ticks",
              "importance": "medium",
              "type": "boolean",
              "label": "Display tick marks",
              "description": "If activated, the slider bar will display a tick mark for each image.",
              "default": false
            },
            {
              "name": "labels",
              "importance": "medium",
              "type": "boolean",
              "label": "Display labels",
              "description": "If activated, the slider bar will display a label instead of/in addition to tick marks.",
              "default": false
            },
            {
              "name": "transparencyReplacementColor",
              "importance": "medium",
              "type": "text",
              "label": "Transparency Replacement Color",
              "description": "Set the color that will replace transparent areas of the images.",
              "optional": true,
              "default": "#000000",
              "widget": "colorSelector",
              "spectrum": {
                "showInput": true
              }
            }
          ]
        },
        {
          "name": "a11y",
          "type": "group",
          "common": true,
          "label": "Readspeaker",
          "importance": "low",
          "fields": [
            {
              "name": "image",
              "type": "text",
              "label": "Image",
              "importance": "low",
              "default": "Image"
            },
            {
              "name": "imageSlider",
              "type": "text",
              "label": "Image Slider",
              "importance": "low",
              "default": "Image Slider"
            }
          ]
        }
      ]
      ';
    }

    //H5P.Dialogcards-1.8
    private function updatedDialogcardsSemantics() {
      return '[
        {
          "name": "title",
          "type": "text",
          "widget": "html",
          "label": "Heading",
          "importance": "high",
          "optional": true,
          "tags": [
            "p",
            "br",
            "strong",
            "em",
            "code"
          ]
        },
        {
          "name": "mode",
          "type": "select",
          "label": "Mode",
          "description": "Mode of presenting the dialog cards",
          "importance": "medium",
          "options": [
            {
              "value": "normal",
              "label": "Normal"
            },
            {
              "value": "repetition",
              "label": "Repetition"
            }
          ],
          "default": "normal"
        },
        {
          "name": "description",
          "type": "text",
          "widget": "html",
          "label": "Task description",
          "importance": "medium",
          "default": "",
          "optional": true,
          "tags": [
            "p",
            "br",
            "strong",
            "em",
            "code"
          ]
        },
        {
          "name": "dialogs",
          "type": "list",
          "importance": "high",
          "widgets": [
            {
              "name": "VerticalTabs",
              "label": "Default"
            }
          ],
          "label": "Dialogs",
          "entity": "dialog",
          "min": 1,
          "defaultNum": 1,
          "field": {
            "name": "question",
            "type": "group",
            "label": "Question",
            "importance": "high",
            "fields": [
              {
                "name": "text",
                "type": "text",
                "widget": "html",
                "tags": [
                  "p",
                  "br",
                  "strong",
                  "em",
                  "code"
                ],
                "label": "Text",
                "importance": "high",
                "description": "Hint for the first part of the dialogue"
              },
              {
                "name": "answer",
                "type": "text",
                "widget": "html",
                "tags": [
                  "p",
                  "br",
                  "strong",
                  "em",
                  "code"
                ],
                "label": "Answer",
                "importance": "high",
                "description": "Hint for the second part of the dialogue"
              },
              {
                "name": "image",
                "type": "image",
                "label": "Image",
                "importance": "high",
                "optional": true,
                "description": "Optional image for the card. (The card may use just an image, just a text or both)"
              },
              {
                "name": "imageAltText",
                "type": "text",
                "label": "Alternative text for the image",
                "importance": "high",
                "optional": true
              },
              {
                "name": "audio",
                "type": "audio",
                "label": "Audio files",
                "importance": "low",
                "optional": true
              },
              {
                "name": "tips",
                "type": "group",
                "label": "Tips",
                "importance": "low",
                "fields": [
                  {
                    "name": "front",
                    "type": "text",
                    "label": "Tip for text",
                    "importance": "low",
                    "optional": true,
                    "description": "Tip for the first part of the dialogue"
                  },
                  {
                    "name": "back",
                    "type": "text",
                    "label": "Tip for answer",
                    "importance": "low",
                    "optional": true,
                    "description": "Tip for the second part of the dialogue"
                  }
                ]
              }
            ]
          }
        },
        {
          "name": "behaviour",
          "type": "group",
          "label": "Behavior settings.",
          "importance": "low",
          "description": "These options will let you control how the task behaves.",
          "optional": true,
          "fields": [
            {
              "name": "enableRetry",
              "type": "boolean",
              "label": "Enable \"Retry\" button",
              "importance": "low",
              "default": true,
              "optional": true
            },
            {
              "name": "disableBackwardsNavigation",
              "type": "boolean",
              "label": "Disable backwards navigation",
              "importance": "low",
              "description": "This option will only allow you to move forward with Dialog Cards",
              "optional": true,
              "default": false,
              "widget": "showWhen",
              "showWhen": {
                "rules": [
                  {
                    "field": "../mode",
                    "equals": "normal"
                  }
                ]
              }
            },
            {
              "name": "scaleTextNotCard",
              "type": "boolean",
              "label": "Scale the text to fit inside the card",
              "importance": "low",
              "description": "Unchecking this option will make the card adapt its size to the size of the text",
              "default": false
            },
            {
              "name": "randomCards",
              "type": "boolean",
              "label": "Randomize cards",
              "importance": "low",
              "description": "Enable to randomize the order of cards on display.",
              "default": false,
              "widget": "showWhen",
              "showWhen": {
                "rules": [
                  {
                    "field": "../mode",
                    "equals": "normal"
                  }
                ]
              }
            },
            {
              "name": "maxProficiency",
              "type": "number",
              "label": "Maximum proficiency level",
              "importance": "low",
              "default": 5,
              "min": 3,
              "max": 7,
              "optional": true,
              "widget": "showWhen",
              "showWhen": {
                "rules": [
                  {
                    "field": "../mode",
                    "equals": "repetition"
                  }
                ]
              }
            },
            {
              "name": "quickProgression",
              "type": "boolean",
              "label": "Allow quick progression",
              "description": "If activated, learners can decide to indicate that they know a card without turning it",
              "importance": "low",
              "default": false,
              "optional": true,
              "widget": "showWhen",
              "showWhen": {
                "rules": [
                  {
                    "field": "../mode",
                    "equals": "repetition"
                  }
                ]
              }
            }
          ]
        },
        {
          "label": "Text for the turn button",
          "importance": "low",
          "name": "answer",
          "type": "text",
          "default": "Turn",
          "common": true
        },
        {
          "label": "Text for the next button",
          "importance": "low",
          "type": "text",
          "name": "next",
          "default": "Next",
          "common": true
        },
        {
          "name": "prev",
          "type": "text",
          "label": "Text for the previous button",
          "importance": "low",
          "default": "Previous",
          "common": true
        },
        {
          "name": "retry",
          "type": "text",
          "label": "Text for the retry button",
          "importance": "low",
          "default": "Retry",
          "common": true
        },
        {
          "name": "correctAnswer",
          "type": "text",
          "label": "Text for the \"correct answer\" button",
          "importance": "low",
          "default": "I got it right!",
          "common": true
        },
        {
          "name": "incorrectAnswer",
          "type": "text",
          "label": "Text for the \"incorrect answer\" button",
          "importance": "low",
          "default": "I got it wrong",
          "common": true
        },
        {
          "name": "round",
          "type": "text",
          "label": "Text for \"Round\" message below cards and on the summary screen",
          "description": "@round will be replaced by the number of the current round",
          "importance": "low",
          "default": "Round @round",
          "common": true
        },
        {
          "name": "cardsLeft",
          "type": "text",
          "label": "Text for \"Cards left\" message",
          "description": "@number will be replaced by the number of cards left in this round",
          "importance": "low",
          "default": "Cards left: @number",
          "common": true
        },
        {
          "name": "nextRound",
          "type": "text",
          "label": "Text for the \"next round\" button",
          "description": "@round will be replaced by the round number",
          "importance": "low",
          "default": "Proceed to round @round",
          "common": true
        },
        {
          "name": "startOver",
          "type": "text",
          "label": "Text for the \"Start over\" button",
          "importance": "low",
          "default": "Start over",
          "common": true
        },
        {
          "name": "showSummary",
          "type": "text",
          "label": "Text for the \"show summary\" button",
          "importance": "low",
          "default": "Next",
          "common": true
        },
        {
          "name": "summary",
          "type": "text",
          "label": "Title text for the summary page",
          "importance": "low",
          "default": "Summary",
          "common": true
        },
        {
          "name": "summaryCardsRight",
          "type": "text",
          "label": "Text for \"Cards you got right:\"",
          "importance": "low",
          "default": "Cards you got right:",
          "common": true
        },
        {
          "name": "summaryCardsWrong",
          "type": "text",
          "label": "Text for \"Cards you got wrong:\"",
          "importance": "low",
          "default": "Cards you got wrong:",
          "common": true
        },
        {
          "name": "summaryCardsNotShown",
          "type": "text",
          "label": "Text for \"Cards not shown:\"",
          "importance": "low",
          "default": "Cards in pool not shown:",
          "common": true
        },
        {
          "name": "summaryOverallScore",
          "type": "text",
          "label": "Text for \"Overall Score\"",
          "importance": "low",
          "default": "Overall Score",
          "common": true
        },
        {
          "name": "summaryCardsCompleted",
          "type": "text",
          "label": "Text for \"Cards completed\"",
          "importance": "low",
          "default": "Cards you have completed learning:",
          "common": true
        },
        {
          "name": "summaryCompletedRounds",
          "type": "text",
          "label": "Text for \"Completed rounds:\"",
          "importance": "low",
          "default": "Completed rounds:",
          "common": true
        },
        {
          "name": "summaryAllDone",
          "type": "text",
          "label": "Message when all cards have been learned proficiently",
          "description": "@cards will be replaced by the number of all cards in the pool. @max will be replaced by the maximum proficiency level - 1.",
          "importance": "low",
          "default": "Well done! You got all @cards cards correct @max times in a row!",
          "common": true
        },
        {
          "name": "progressText",
          "type": "text",
          "label": "Progress text",
          "importance": "low",
          "description": "Available variables are @card and @total.",
          "default": "Card @card of @total",
          "common": true
        },
        {
          "name": "cardFrontLabel",
          "type": "text",
          "label": "Label for card text",
          "importance": "low",
          "description": "Used for accessibility by assistive technologies",
          "default": "Card front",
          "common": true
        },
        {
          "name": "cardBackLabel",
          "type": "text",
          "label": "Label for card back",
          "importance": "low",
          "description": "Used for accessibility by assistive technologies",
          "default": "Card back",
          "common": true
        },
        {
          "name": "tipButtonLabel",
          "type": "text",
          "label": "Label for the show tip button",
          "importance": "low",
          "default": "Show tip",
          "common": true
        },
        {
          "name": "audioNotSupported",
          "type": "text",
          "label": "Audio not supported message",
          "importance": "low",
          "common": true,
          "default": "Your browser does not support this audio"
        },
        {
          "name": "confirmStartingOver",
          "type": "group",
          "label": "Confirm starting over dialog",
          "importance": "low",
          "common": true,
          "fields": [
            {
              "name": "header",
              "type": "text",
              "label": "Header text",
              "importance": "low",
              "default": "Start over?"
            },
            {
              "name": "body",
              "type": "text",
              "label": "Body text",
              "importance": "low",
              "default": "All progress will be lost. Are you sure you want to start over?",
              "widget": "html",
              "enterMode": "p",
              "tags": [
                "strong",
                "em",
                "del",
                "u",
                "code"
              ]
            },
            {
              "name": "cancelLabel",
              "type": "text",
              "label": "Cancel button label",
              "importance": "low",
              "default": "Cancel"
            },
            {
              "name": "confirmLabel",
              "type": "text",
              "label": "Confirm button label",
              "importance": "low",
              "default": "Start over"
            }
          ]
        }
      ]
      ';
    }

    //H5P.Dictation-1.0
    private function updatedDictationSemantics() {
      return '[
        {
          "name": "media",
          "type": "group",
          "label": "Media",
          "importance": "medium",
          "fields": [
            {
              "name": "type",
              "type": "library",
              "label": "Type",
              "importance": "medium",
              "options": [
                "H5P.Image 1.1",
                "H5P.Video 1.5"
              ],
              "optional": true,
              "description": "Optional media to display above the question."
            },
            {
              "name": "disableImageZooming",
              "type": "boolean",
              "label": "Disable image zooming",
              "importance": "low",
              "default": false,
              "optional": true,
              "widget": "showWhen",
              "showWhen": {
                "rules": [
                  {
                    "field": "type",
                    "equals": "H5P.Image 1.1"
                  }
                ]
              }
            }
          ]
        },
        {
          "name": "taskDescription",
          "label": "Task description",
          "type": "text",
          "widget": "html",
          "importance": "high",
          "description": "Describe your task here.",
          "placeholder": "Please listen carefully and write what you hear.",
          "enterMode": "div",
          "tags": [
            "strong",
            "em",
            "u",
            "a",
            "ul",
            "ol",
            "h2",
            "h3",
            "hr",
            "pre",
            "code"
          ]
        },
        {
          "name": "sentences",
          "label": "Sentences",
          "importance": "high",
          "type": "list",
          "widgets": [
            {
              "name": "VerticalTabs",
              "label": "Default"
            }
          ],
          "min": 1,
          "entity": "Sentence",
          "field": {
            "name": "sentence",
            "type": "group",
            "label": "Sentence",
            "fields": [
              {
                "name": "description",
                "type": "text",
                "label": "Description",
                "description": "You can optionally put a simple description above the text input field, useful e.g. for dialogues.",
                "importance": "medium",
                "optional": true
              },
              {
                "name": "sample",
                "type": "audio",
                "label": "Sound sample",
                "description": "Sentence spoken in normal speed",
                "importance": "medium",
                "widgetExtensions": ["AudioRecorder"]
              },
              {
                "name": "sampleAlternative",
                "type": "audio",
                "label": "Sound sample slow",
                "description": "Sentence spoken in slow speed",
                "importance": "medium",
                "optional": true,
                "widgetExtensions": ["AudioRecorder"]
              },
              {
                "name": "text",
                "type": "text",
                "label": "Text",
                "description": "Text that should be written. You can add alternate spellings to a word by adding a vertical line (|) behind followed by an alternative.",
                "importance": "medium",
                "maxLength": 1000
              }
            ]
          }
        },
        {
          "name": "overallFeedback",
          "type": "group",
          "label": "Overall Feedback",
          "importance": "low",
          "expanded": true,
          "fields": [
            {
              "name": "overallFeedback",
              "type": "list",
              "widgets": [
                {
                  "name": "RangeList",
                  "label": "Default"
                }
              ],
              "importance": "high",
              "label": "Define custom feedback for any score range",
              "description": "Click the \"Add range\" button to add as many ranges as you need. Example: 0-20% Bad score, 21-91% Average Score, 91-100% Great Score!",
              "entity": "range",
              "min": 1,
              "defaultNum": 1,
              "optional": true,
              "field": {
                "name": "overallFeedback",
                "type": "group",
                "importance": "low",
                "fields": [
                  {
                    "name": "from",
                    "type": "number",
                    "label": "Score Range",
                    "min": 0,
                    "max": 100,
                    "default": 0,
                    "unit": "%"
                  },
                  {
                    "name": "to",
                    "type": "number",
                    "min": 0,
                    "max": 100,
                    "default": 100,
                    "unit": "%"
                  },
                  {
                    "name": "feedback",
                    "type": "text",
                    "label": "Feedback for defined score range",
                    "importance": "low",
                    "placeholder": "Fill in the feedback",
                    "optional": true
                  }
                ]
              }
            }
          ]
        },
        {
          "name": "behaviour",
          "type": "group",
          "label": "Behavior settings",
          "importance": "low",
          "description": "These options will let you control how the task behaves.",
          "fields": [
            {
              "name": "tries",
              "type": "number",
              "label": "Maximum tries",
              "description": "Will limit the number of times the samples for each sentence can be listened to.",
              "optional": true,
              "min": 1
            },
            {
              "name": "triesAlternative",
              "type": "number",
              "label": "Maximum tries for slow speed",
              "description": "Will limit the number of times the slow samples for each sentence can be listened to.",
              "optional": true,
              "min": 1
            },
            {
              "name": "ignorePunctuation",
              "type": "boolean",
              "label": "Ignore Punctuation marks",
              "description": "If checked, punctuation marks will not be considerd for scoring.",
              "optional": false,
              "default": true
            },
            {
              "name": "customTypoDisplay",
              "type": "boolean",
              "label": "Custom typo display",
              "description": "If checked, typos will be displayed in a custom style distinguishing them from clear mistakes.",
              "default": true,
              "optional": false
            },
            {
              "name": "typoFactor",
              "type": "select",
              "label": "Value of typos",
              "description": "Determine to which extent typing errors (word with 3-9 characters: up to 1 mistake, word with more than 9 characters: up to 2 mistakes) count as a real mistake.",
              "options": [
                  {
                    "value": "100",
                    "label": "100 %"
                  },
                  {
                    "value": "50",
                    "label": "50 %"
                  },
                  {
                    "value": "0",
                    "label": "0 %"
                  }
                ],
              "default": "50"
            },
            {
              "name": "alternateSolution",
              "type": "select",
              "label": "Presentation of alternate solutions",
              "description": "Define which alternatives should be presented for wrong or missing words in the solution.",
              "options": [
                {
                  "value": "first",
                  "label": "Show only first alternative"
                },
                {
                  "value": "all",
                  "label": "Show all alternatives"
                }
              ],
              "default": "first"
            },
            {
              "name": "overrideRTL",
              "type": "select",
              "label": "Writing direction",
              "description": "Set whether the sentences language is right-to-left or left-to-right.",
              "options": [
                {
                  "value": "auto",
                  "label": "Automatic detection"
                },
                {
                  "value": "on",
                  "label": "Right-to-left"
                },
                {
                  "value": "off",
                  "label": "Left-to-right"
                }
              ],
              "default": "auto"
            },
            {
              "name": "autosplit",
              "type": "boolean",
              "label": "Splitting of characters",
              "description": "Activate if particular characters (e.g. Chinese Han characters) should be split into separate words automatically.",
              "importance": "low",
              "default": true
            },
            {
              "name": "enableRetry",
              "label": "Enable \"Retry\"",
              "type": "boolean",
              "importance": "low",
              "default": true,
              "optional": true
            },
            {
              "name": "enableSolution",
              "label": "Enable \"Show solution\" button",
              "type": "boolean",
              "importance": "low",
              "default": true,
              "optional": true
            }
          ]
        },
        {
          "name": "l10n",
          "type": "group",
          "common": true,
          "label": "User interface",
          "importance": "low",
          "fields": [
            {
              "name": "generalFeedback",
              "type": "text",
              "label": "General feedback",
              "description": "You can use several placeholders that will be replaced with the adequate number: @matches = number of matches, @total = total mistakes, @capped = capped total mistakes, @wrong = wrong words, @added = additional words, @missing = missing words, @typo = typing errors",
              "importance": "low",
              "default": "You have made @total mistake(s)."
            },
            {
              "name": "checkAnswer",
              "type": "text",
              "label": "Text for \"Check\" button",
              "importance": "low",
              "default": "Check"
            },
            {
              "name": "tryAgain",
              "label": "Text for \"Retry\" button",
              "type": "text",
              "importance": "low",
              "default": "Retry"
            },
            {
              "name": "showSolution",
              "type": "text",
              "label": "Text for \"Show solution\" button",
              "importance": "low",
              "default": "Show solution"
            },
            {
              "name": "audioNotSupported",
              "type": "text",
              "label": "Audio not supported message",
              "importance": "low",
              "default": "Your browser does not support this audio."
            }
          ]
        },
        {
          "name": "a11y",
          "type": "group",
          "common": true,
          "label": "Readspeaker",
          "importance": "low",
          "fields": [
            {
              "name": "play",
              "type": "text",
              "label": "Play button",
              "importance": "low",
              "default": "Play"
            },
            {
              "name": "playSlowly",
              "type": "text",
              "label": "Play slowly button",
              "importance": "low",
              "default": "Play slowly"
            },
            {
              "name": "triesLeft",
              "type": "text",
              "label": "Tries left (text for readspeakers and hover text)",
              "description": "@number will be replaced by the current number of tries left.",
              "importance": "low",
              "default": "Number of tries left: @number"
            },
            {
              "name": "infinite",
              "type": "text",
              "label": "Infinite (text for readspeakers and hover text)",
              "importance": "low",
              "default": "infinite"
            },
            {
              "name": "enterText",
              "type": "text",
              "label": "Enter text field",
              "importance": "low",
              "default": "Enter what you have heard."
            },
            {
              "name": "yourResult",
              "type": "text",
              "label": "Your result",
              "description": "@score will be replaced by the number of points. @total will be replaced by the maximum possible points.",
              "importance": "low",
              "default": "You got @score out of @total points"
            },
            {
              "name": "solution",
              "type": "text",
              "label": "Solution",
              "importance": "low",
              "default": "Solution"
            },
            {
              "name": "sentence",
              "type": "text",
              "label": "Sentence",
              "importance": "low",
              "default": "Sentence"
            },
            {
              "name": "item",
              "type": "text",
              "label": "Item",
              "importance": "low",
              "default": "Item"
            },
            {
              "name": "correct",
              "type": "text",
              "label": "Correct",
              "importance": "low",
              "default": "correct"
            },
            {
              "name": "wrong",
              "type": "text",
              "label": "Wrong",
              "importance": "low",
              "default": "wrong"
            },
            {
              "name": "typo",
              "type": "text",
              "label": "Small mistake",
              "importance": "low",
              "default": "small mistake"
            },
            {
              "name": "missing",
              "type": "text",
              "label": "Missing word or symbol",
              "importance": "low",
              "default": "missing"
            },
            {
              "name": "added",
              "type": "text",
              "label": "Added word or symbol",
              "importance": "low",
              "default": "added"
            },
            {
              "name": "shouldHaveBeen",
              "type": "text",
              "label": "CorrectSolution",
              "importance": "low",
              "default": "Should have been"
            },
            {
              "name": "or",
              "type": "text",
              "label": "Or",
              "importance": "low",
              "default": "or"
            },
            {
              "name": "point",
              "type": "text",
              "label": "Point",
              "importance": "low",
              "default": "point"
            },
            {
              "name": "points",
              "type": "text",
              "label": "Points",
              "importance": "low",
              "default": "points"
            },
            {
              "name": "period",
              "type": "text",
              "label": "Period",
              "importance": "low",
              "default": "period"
            },
            {
              "name": "exclamationPoint",
              "type": "text",
              "label": "Exclamation point",
              "importance": "low",
              "default": "exclamation point"
            },
            {
              "name": "questionMark",
              "type": "text",
              "label": "Question mark",
              "importance": "low",
              "default": "question mark"
            },
            {
              "name": "comma",
              "type": "text",
              "label": "Comma",
              "importance": "low",
              "default": "comma"
            },
            {
              "name": "singleQuote",
              "type": "text",
              "label": "Single quote",
              "importance": "low",
              "default": "single quote"
            },
            {
              "name": "doubleQuote",
              "type": "text",
              "label": "Double quote",
              "importance": "low",
              "default": "double quote"
            },
            {
              "name": "colon",
              "type": "text",
              "label": "Colon",
              "importance": "low",
              "default": "colon"
            },
            {
              "name": "semicolon",
              "type": "text",
              "label": "Semicolon",
              "importance": "low",
              "default": "semicolon"
            },
            {
              "name": "plus",
              "type": "text",
              "label": "Plus",
              "importance": "low",
              "default": "plus"
            },
            {
              "name": "minus",
              "type": "text",
              "label": "Minus",
              "importance": "low",
              "default": "minus"
            },
            {
              "name": "asterisk",
              "type": "text",
              "label": "Asterisk",
              "importance": "low",
              "default": "asterisk"
            },
            {
              "name": "forwardSlash",
              "type": "text",
              "label": "Forward slash",
              "importance": "low",
              "default": "forward slash"
            }
          ]
        }
      ]
      ';
    }

    //H5P.DragText-1.8
    private function updatedDragTextSemantics() {
      return '[
        {
          "label": "Task description",
          "importance": "high",
          "name": "taskDescription",
          "type": "text",
          "widget": "html",
          "description": "Describe how the user should solve the task.",
          "default": "Drag the words into the correct boxes",
          "enterMode": "p",
          "tags": [
            "strong",
            "em",
            "u",
            "a",
            "ul",
            "ol",
            "h2",
            "h3",
            "hr",
            "pre",
            "code"
          ]
        },
        {
          "label": "Text",
          "importance": "high",
          "name": "textField",
          "type": "text",
          "widget": "textarea",
          "placeholder": "*Oslo* is the capital of Norway, *Stockholm* is the capital of Sweden and *Copenhagen* is the capital of Denmark. All cities are located in the *Scandinavian:Northern Part of Europe* peninsula.",
          "description": "",
          "important": {
            "description": "<ul><li>Droppable words are added with an asterisk (*) in front and behind the correct word/phrase.</li><li>You may add a textual tip, using a colon (:) in front of the tip.</li><li>For every empty spot there is only one correct word.</li><li>You may add feedback to be displayed when a task is completed. Use \\+ for correct and \\- for incorrect feedback.</li></ul>",
            "example": "H5P content may be edited using a *browser:What type of program is Chrome?*. </br> H5P content is *interactive\\+Correct! \\-Incorrect, try again!*"
          }
        },
        {
          "name": "overallFeedback",
          "type": "group",
          "label": "Overall Feedback",
          "importance": "low",
          "expanded": true,
          "fields": [
            {
              "name": "overallFeedback",
              "type": "list",
              "widgets": [
                {
                  "name": "RangeList",
                  "label": "Default"
                }
              ],
              "importance": "high",
              "label": "Define custom feedback for any score range",
              "description": "Click the \"Add range\" button to add as many ranges as you need. Example: 0-20% Bad score, 21-91% Average Score, 91-100% Great Score!",
              "entity": "range",
              "min": 1,
              "defaultNum": 1,
              "optional": true,
              "field": {
                "name": "overallFeedback",
                "type": "group",
                "importance": "low",
                "fields": [
                  {
                    "name": "from",
                    "type": "number",
                    "label": "Score Range",
                    "min": 0,
                    "max": 100,
                    "default": 0,
                    "unit": "%"
                  },
                  {
                    "name": "to",
                    "type": "number",
                    "min": 0,
                    "max": 100,
                    "default": 100,
                    "unit": "%"
                  },
                  {
                    "name": "feedback",
                    "type": "text",
                    "label": "Feedback for defined score range",
                    "importance": "low",
                    "placeholder": "Fill in the feedback",
                    "optional": true
                  }
                ]
              }
            }
          ]
        },
        {
          "label": "Text for \"Check\" button",
          "importance": "low",
          "name": "checkAnswer",
          "type": "text",
          "default": "Check",
          "common": true
        },
        {
          "label": "Text for \"Retry\" button",
          "importance": "low",
          "name": "tryAgain",
          "type": "text",
          "default": "Retry",
          "common": true
        },
        {
          "label": "Text for \"Show Solution\" button",
          "importance": "low",
          "name": "showSolution",
          "type": "text",
          "default": "Show solution",
          "common": true
        },
        {
          "label": "Numbered Drop zone label",
          "importance": "low",
          "name": "dropZoneIndex",
          "type": "text",
          "default": "Drop Zone @index.",
          "description": "Label used for accessibility, where the Read speaker will read the index of a drop zone. Variable available: @index",
          "common": true
        },
        {
          "label": "Empty Drop Zone label",
          "importance": "low",
          "name": "empty",
          "type": "text",
          "default": "Drop Zone @index is empty.",
          "description": "Label used for accessibility, where the Read speaker will read that the drop zone is empty",
          "common": true
        },
        {
          "label": "Contains Drop Zone label",
          "importance": "low",
          "name": "contains",
          "type": "text",
          "default": "Drop Zone @index contains draggable @draggable.",
          "description": "Label used for accessibility, where the Read speaker will read that the drop zone contains a draggable",
          "common": true
        },
        {
          "label": "Draggable elements label",
          "importance": "low",
          "name": "ariaDraggableIndex",
          "type": "text",
          "default": "@index of @count draggables.",
          "description": "Label used for accessibility, where the Read speaker reads that this is a draggable element. Variable available: @index, @count",
          "common": true
        },
        {
          "label": "Label for show tip button",
          "importance": "low",
          "name": "tipLabel",
          "type": "text",
          "default": "Show tip",
          "description": "Label used for accessibility, where the Read speaker reads it before the tip is read out",
          "common": true
        },
        {
          "name": "correctText",
          "type": "text",
          "label": "Readspeaker text for correct answer",
          "importance": "low",
          "default": "Correct!",
          "common": true
        },
        {
          "name": "incorrectText",
          "type": "text",
          "label": "Readspeaker text for incorrect answer",
          "importance": "low",
          "default": "Incorrect!",
          "common": true
        },
        {
          "name": "resetDropTitle",
          "type": "text",
          "label": "Confirmation dialog title that user wants to reset a droppable",
          "importance": "low",
          "default": "Reset drop",
          "common": true
        },
        {
          "name": "resetDropDescription",
          "type": "text",
          "label": "Confirmation dialog description that user wants to reset a droppable",
          "importance": "low",
          "default": "Are you sure you want to reset this drop zone?",
          "common": true
        },
        {
          "name": "grabbed",
          "type": "text",
          "label": "Label used for accessibility, where the read speaker indicates that dragging is initiated",
          "importance": "low",
          "default": "Draggable is grabbed.",
          "common": true
        },
        {
          "name": "cancelledDragging",
          "type": "text",
          "label": "Label used for accessibility, where the read speaker indicates that dragging is canceled",
          "importance": "low",
          "default": "Cancelled dragging.",
          "common": true
        },
        {
          "name": "correctAnswer",
          "type": "text",
          "label": "Label used for accessibility, where the read speaker indicates that a text is the correct answer",
          "importance": "low",
          "default": "Correct answer:",
          "common": true
        },
        {
          "name": "feedbackHeader",
          "type": "text",
          "label": "Header for panel containing feedback for correct/incorrect answers",
          "importance": "low",
          "default": "Feedback",
          "common": true
        },
        {
          "name": "behaviour",
          "type": "group",
          "label": "Behavior settings.",
          "importance": "low",
          "description": "These options will let you control how the task behaves.",
          "optional": true,
          "fields": [
            {
              "label": "Enable \"Retry\"",
              "importance": "low",
              "name": "enableRetry",
              "type": "boolean",
              "default": true
            },
            {
              "label": "Enable \"Show Solution\" button",
              "importance": "low",
              "name": "enableSolutionsButton",
              "type": "boolean",
              "default": true
            },
            {
              "name": "enableCheckButton",
              "type": "boolean",
              "label": "Enable \"Check\" button",
              "widget": "none",
              "importance": "low",
              "default": true,
              "optional": true
            },
            {
              "label": "Instant feedback",
              "importance": "low",
              "name": "instantFeedback",
              "type": "boolean",
              "default": false,
              "optional": true
            }
          ]
        },
        {
          "name": "scoreBarLabel",
          "type": "text",
          "label": "Textual representation of the score bar for those using a readspeaker",
          "default": "You got :num out of :total points",
          "importance": "low",
          "common": true
        },
        {
          "name": "a11yCheck",
          "type": "text",
          "label": "Assistive technology label for \"Check\" button",
          "default": "Check the answers. The responses will be marked as correct, incorrect, or unanswered.",
          "importance": "low",
          "common": true
        },
        {
          "name": "a11yShowSolution",
          "type": "text",
          "label": "Assistive technology label for \"Show Solution\" button",
          "default": "Show the solution. The task will be marked with its correct solution.",
          "importance": "low",
          "common": true
        },
        {
          "name": "a11yRetry",
          "type": "text",
          "label": "Assistive technology label for \"Retry\" button",
          "default": "Retry the task. Reset all responses and start the task over again.",
          "importance": "low",
          "common": true
        }
      ]';
    }

    //H5P.Essay-1.2
    private function updatedEssaySemantics() {
      return '[
        {
          "name": "media",
          "type": "group",
          "label": "Media",
          "importance": "medium",
          "fields": [
            {
              "name": "type",
              "type": "library",
              "label": "Type",
              "importance": "medium",
              "options": [
                "H5P.Image 1.1",
                "H5P.Video 1.5"
              ],
              "optional": true,
              "description": "Optional media to display above the question."
            },
            {
              "name": "disableImageZooming",
              "type": "boolean",
              "label": "Disable image zooming",
              "importance": "low",
              "default": false,
              "optional": true,
              "widget": "showWhen",
              "showWhen": {
                "rules": [
                  {
                    "field": "type",
                    "equals": "H5P.Image 1.1"
                  }
                ]
              }
            }
          ]
        },
        {
          "name": "taskDescription",
          "label": "Task description",
          "type": "text",
          "widget": "html",
          "importance": "high",
          "description": "Describe your task here. The task description will appear above text input area.",
          "placeholder": "Summarize the book in 500 characters ...",
          "enterMode": "div",
          "tags": [
            "strong",
            "em",
            "u",
            "a",
            "ul",
            "ol",
            "h2",
            "h3",
            "hr",
            "pre",
            "code"
          ]
        },
        {
          "name": "placeholderText",
          "label": "Help text",
          "type": "text",
          "description": "This text should help the user to get started.",
          "placeholder": "This book is about ...",
          "importance": "low",
          "optional": true
        },
        {
          "name": "solution",
          "type": "group",
          "label": "Sample solution",
          "importance": "high",
          "expanded": true,
          "description": "You can optionally add a sample solution thats shown after the student created a text. Its called sample solution because there probably is not only one solution",
          "fields": [
            {
              "name": "introduction",
              "type": "text",
              "label": "Introduction",
              "importance": "low",
              "description": "You can optionally leave the students some explanations about your example. The explanation will only show up if you add an example, too.",
              "placeholder": "Please remember that you were not expected to come up with the exact same solution. Its just a good example.",
              "optional": true,
              "widget": "html",
              "enterMode": "div",
              "tags": [
                "strong",
                "em",
                "u",
                "a",
                "ul",
                "ol",
                "hr",
                "code"
              ]
            },
            {
              "name": "sample",
              "type": "text",
              "label": "Sample solution text",
              "importance": "low",
              "description": "The student will see a \"Show solution\" button after submitting if you provide some text here.",
              "optional": true,
              "widget": "html",
              "enterMode": "div",
              "tags": [
                "strong",
                "a"
              ]
            }
          ]
        },
        {
          "name": "keywords",
          "label": "Keywords",
          "importance": "high",
          "type": "list",
          "widgets": [
            {
              "name": "VerticalTabs",
              "label": "Default"
            }
          ],
          "min": 1,
          "entity": "Keyword",
          "field": {
            "name": "groupy",
            "type": "group",
            "label": "Keyword",
            "fields": [
              {
                "name": "keyword",
                "type": "text",
                "label": "Keyword",
                "description": "Keyword or phrase to look for. Use an asterisk * as a wildcard for one or more characters. Use a slash / at the beginning and the end to use a regular expression.",
                "importance": "medium"
              },
              {
                "name": "alternatives",
                "type": "list",
                "label": "Variations",
                "description": "Add optional variations for this keyword. Example: For a city add alternatives town, municipality etc. Points will be awarded if the user includes any of the specified alternatives.",
                "importance": "medium",
                "entity": "variation",
                "optional": true,
                "min": 0,
                "field": {
                  "name": "alternative",
                  "type": "text",
                  "label": "Keyword variation"
                }
              },
              {
                "name": "options",
                "type": "group",
                "label": "Points, Options and Feedback",
                "importance": "low",
                "fields": [
                  {
                    "name": "points",
                    "type": "number",
                    "label": "Points",
                    "default": 1,
                    "description": "Points that the user will get if he/she includes this keyword or its alternatives in the answer.",
                    "min": 1
                  },
                  {
                    "name": "occurrences",
                    "type": "number",
                    "label": "Occurrences",
                    "default": 1,
                    "description": "Define how many occurrences of the keyword or its variations should be awarded with points.",
                    "min": 1
                  },
                  {
                    "name": "caseSensitive",
                    "type": "boolean",
                    "label": "Case sensitive",
                    "default": true,
                    "description": "Makes sure the user input has to be exactly the same as the answer."
                  },
                  {
                    "name": "forgiveMistakes",
                    "type": "boolean",
                    "label": "Forgive minor mistakes",
                    "description": "This will accept minor spelling mistakes (3-9 characters: 1 mistake, more than 9 characters: 2 mistakes)."
                  },
                  {
                    "name": "feedbackIncluded",
                    "type": "text",
                    "label": "Feedback if keyword included",
                    "description": "This feedback will be displayed if the user includes this keyword or its alternatives in the answer.",
                    "optional": true,
                    "maxLength": 1000
                  },
                  {
                    "name": "feedbackMissed",
                    "type": "text",
                    "label": "Feedback if keyword missing",
                    "description": "This feedback will be displayed if the user doesn’t include this keyword or its alternatives in the answer.",
                    "optional": true,
                    "maxLength": 1000
                  },
                  {
                    "name": "feedbackIncludedWord",
                    "type": "select",
                    "label": "Feedback word shown if keyword included",
                    "importance": "low",
                    "description": "This option allows you to specify which word should be shown in front of your feedback if a keyword was found in the text.",
                    "optional": false,
                    "default": "keyword",
                    "options": [
                      {
                        "value": "keyword",
                        "label": "keyword"
                      },
                      {
                        "value": "alternative",
                        "label": "alternative found"
                      },
                      {
                        "value": "answer",
                        "label": "answer given"
                      },
                      {
                        "value": "none",
                        "label": "none"
                      }
                    ]
                  },
                  {
                    "name": "feedbackMissedWord",
                    "type": "select",
                    "label": "Feedback word shown if keyword missing",
                    "importance": "low",
                    "description": "This option allows you to specify which word should be shown in front of your feedback if a keyword was not found in the text.",
                    "optional": false,
                    "default": "none",
                    "options": [
                      {
                        "value": "keyword",
                        "label": "keyword"
                      },
                      {
                        "value": "none",
                        "label": "none"
                      }
                    ]
                  }
                ]
              }
            ]
          }
        },
        {
          "name": "overallFeedback",
          "type": "group",
          "label": "Overall Feedback",
          "importance": "low",
          "expanded": true,
          "fields": [
            {
              "name": "overallFeedback",
              "type": "list",
              "widgets": [
                {
                  "name": "RangeList",
                  "label": "Default"
                }
              ],
              "importance": "high",
              "label": "Define custom feedback for any score range",
              "description": "Click the \"Add range\" button to add as many ranges as you need. Example: 0-20% Bad score, 21-91% Average Score, 91-100% Great Score!",
              "entity": "range",
              "min": 1,
              "defaultNum": 1,
              "optional": true,
              "field": {
                "name": "overallFeedback",
                "type": "group",
                "importance": "low",
                "fields": [
                  {
                    "name": "from",
                    "type": "number",
                    "label": "Score Range",
                    "min": 0,
                    "max": 100,
                    "default": 0,
                    "unit": "%"
                  },
                  {
                    "name": "to",
                    "type": "number",
                    "min": 0,
                    "max": 100,
                    "default": 100,
                    "unit": "%"
                  },
                  {
                    "name": "feedback",
                    "type": "text",
                    "label": "Feedback for defined score range",
                    "importance": "low",
                    "placeholder": "Fill in the feedback",
                    "optional": true
                  }
                ]
              }
            }
          ]
        },
        {
          "name": "behaviour",
          "type": "group",
          "label": "Behavior settings",
          "importance": "low",
          "description": "These options will let you control how the task behaves.",
          "fields": [
            {
              "name": "minimumLength",
              "label": "Minimum number of characters",
              "type": "number",
              "description": "Specify the minimum number of characters that the user must enter.",
              "importance": "low",
              "optional": true,
              "min": "0"
            },
            {
              "name": "maximumLength",
              "label": "Maximum number of characters",
              "type": "number",
              "description": "Specify the maximum number of characters that the user can enter.",
              "importance": "low",
              "optional": true,
              "min": "0"
            },
            {
              "name": "inputFieldSize",
              "label": "Input field size",
              "type": "select",
              "importance": "low",
              "description": "The size of the input field in amount of lines it will cover",
              "options": [
                {
                  "value": "1",
                  "label": "1 line"
                },
                {
                  "value": "3",
                  "label": "3 lines"
                },
                {
                  "value": "10",
                  "label": "10 lines"
                }
              ],
              "default": "10"
            },
            {
              "name": "enableRetry",
              "label": "Enable \"Retry\"",
              "type": "boolean",
              "importance": "low",
              "description": "If checked, learners can retry the task.",
              "default": true,
              "optional": true
            },
            {
              "name": "ignoreScoring",
              "label": "Ignore scoring",
              "type": "boolean",
              "importance": "low",
              "description": "If checked, learners will only see the feedback that you provided for the keywords, but no score.",
              "default": false,
              "optional": true
            },
            {
              "name": "pointsHost",
              "label": "Points in host environment",
              "type": "number",
              "importance": "low",
              "description": "Used to award points in host environment merely for answering (not shown to learner).",
              "min": 0,
              "default": 1,
              "widget": "showWhen",
              "showWhen": {
                "rules": [
                  {
                    "field": "ignoreScoring",
                    "equals": true
                  }
                ]
              }
            },
            {
              "name": "percentagePassing",
              "type": "number",
              "label": "Passing percentage",
              "description": "Percentage thats necessary for passing",
              "optional": true,
              "min": 0,
              "max": 100,
              "widget": "showWhen",
              "showWhen": {
                "rules": [
                  {
                    "field": "ignoreScoring",
                    "equals": false
                  }
                ]
              }
            },
            {
              "name": "percentageMastering",
              "type": "number",
              "label": "Mastering percentage",
              "description": "Percentage thats necessary for mastering. Setting the mastering percentage below 100 % will lower the maximum possible score accordingly. Its intended to give some leeway to students, not to \"graciously accept\" solutions that do not contain all keywords.",
              "optional": true,
              "min": 0,
              "max": 100,
              "widget": "showWhen",
              "showWhen": {
                "rules": [
                  {
                    "field": "ignoreScoring",
                    "equals": false
                  }
                ]
              }
            },
            {
              "name": "overrideCaseSensitive",
              "type": "select",
              "label": "Override case sensitive",
              "importance": "low",
              "description": "This option determines if the \"Case sensitive\" option will be activated for all keywords.",
              "optional": true,
              "options": [
                {
                  "value": "on",
                  "label": "Enabled"
                },
                {
                  "value": "off",
                  "label": "Disabled"
                }
              ]
            },
            {
              "name": "overrideForgiveMistakes",
              "type": "select",
              "label": "Override forgive mistakes",
              "importance": "low",
              "description": "This option determines if the \"Forgive mistakes\" option will be activated for all keywords.",
              "optional": true,
              "options": [
                {
                  "value": "on",
                  "label": "Enabled"
                },
                {
                  "value": "off",
                  "label": "Disabled"
                }
              ]
            }
          ]
        },
        {
          "name": "checkAnswer",
          "type": "text",
          "label": "Text for \"Check\" button",
          "importance": "low",
          "default": "Check",
          "common": true
        },
        {
          "name": "tryAgain",
          "label": "Text for \"Retry\" button",
          "type": "text",
          "importance": "low",
          "default": "Retry",
          "common": true
        },
        {
          "name": "showSolution",
          "type": "text",
          "label": "Text for \"Show solution\" button",
          "importance": "low",
          "default": "Show solution",
          "common": true
        },
        {
          "name": "feedbackHeader",
          "type": "text",
          "label": "Header for panel containing feedback for included/missing keywords",
          "importance": "low",
          "default": "Feedback",
          "common": true
        },
        {
          "name": "solutionTitle",
          "type": "text",
          "label": "Label for solution",
          "importance": "low",
          "default": "Sample solution",
          "common": true
        },
        {
          "name": "remainingChars",
          "type": "text",
          "label": "Remaining characters",
          "importance": "low",
          "common": true,
          "default": "Remaining characters: @chars",
          "description": "Message for remaining characters. You can use @chars which will be replaced by the corresponding number."
        },
        {
          "name": "notEnoughChars",
          "type": "text",
          "label": "Not enough characters",
          "importance": "low",
          "common": true,
          "default": "You must enter at least @chars characters!",
          "description": "Message to indicate that the text doesnt contain enough characters. You can use @chars which will be replaced by the corresponding number."
        },
        {
          "name": "messageSave",
          "type": "text",
          "label": "Save message",
          "description": "Message indicating that the text has been saved",
          "importance": "low",
          "common": true,
          "default": "saved"
        },
        {
          "name": "ariaYourResult",
          "type": "text",
          "label": "Your result (not displayed)",
          "description": "Accessibility text used for readspeakers. @score will be replaced by the number of points. @total will be replaced by the maximum possible points.",
          "importance": "low",
          "common": true,
          "default": "You got @score out of @total points"
        },
        {
          "name": "ariaNavigatedToSolution",
          "type": "text",
          "label": "Navigation message (not displayed)",
          "description": "Accessibility text used for readspeakers",
          "importance": "low",
          "common": true,
          "default": "Navigated to newly included sample solution after textarea."
        },
        {
          "name": "currikisettings",
          "type": "group",
          "label": "Curriki settings",
          "importance": "low",
          "description": "These options will let you control how the curriki studio behaves.",
          "optional": true,
          "fields": [
            {
              "label": "Do not Show Submit Button",
              "importance": "low",
              "name": "disableSubmitButton",
              "type": "boolean",
              "default": false,
              "optional": true,
              "description": "This option only applies to a standalone activity. The Submit button is required for grade passback to an LMS."
            },
            {
              "label": "Placeholder",
              "importance": "low",
              "name": "placeholder",
              "type": "boolean",
              "default": false,
              "optional": true,
              "description": "This option is a place holder. will be used in future"
            },
            {
              "label": "Curriki Localization",
              "description": "Here you can edit settings or translate texts used in curriki settings",
              "importance": "low",
              "name": "currikil10n",
              "type": "group",
              "fields": [
                {
                  "label": "Text for \"Submit\" button",
                  "name": "submitAnswer",
                  "importance": "low",
                  "type": "text",
                  "default": "Submit",
                  "optional": true
                },
                {
                  "label": "Text for \"Placeholder\" button",
                  "importance": "low",
                  "name": "placeholderButton",
                  "type": "text",
                  "default": "Placeholder",
                  "optional": true
                }
              ]
            }
          ]
        }
      ]
      ';
    }

    //H5P.ImageJuxtaposition-1.4
    private function updatedImageJuxtapositionSemantics() {
      return '[
        {
          "name": "title",
          "label": "Heading",
          "importance": "high",
          "type": "text",
          "optional": true,
          "placeholder": "Here you can add an optional heading.",
          "description": "The heading youd like to show before the befort/after image"
        },
        {
          "name": "imageBefore",
          "type": "group",
          "label": "First image",
          "importance": "high",
          "expanded": true,
          "fields": [
            {
              "name": "imageBefore",
              "label": "First image",
              "importance": "low",
              "type": "library",
              "options": [
                "H5P.Image 1.1"
              ],
              "optional": false,
              "description": "The first image. Please make sure that it has the same size as the second image."
            },
            {
              "name": "labelBefore",
              "label": "Label for first image",
              "importance": "low",
              "type": "text",
              "optional": true,
              "description": "Label to put over first image"
            }
          ]
        },
        {
          "name": "imageAfter",
          "type": "group",
          "label": "Second image",
          "importance": "high",
          "expanded": true,
          "fields": [
            {
              "name": "imageAfter",
              "label": "Second image",
              "importance": "low",
              "type": "library",
              "options": [
                "H5P.Image 1.1"
              ],
              "optional": false,
              "description": "The second image. Please make sure that it has the same size as the first image."
            },
            {
              "name": "labelAfter",
              "label": "Label for second image",
              "importance": "low",
              "type": "text",
              "optional": true,
              "description": "Label to put over second image"
            }
          ]
        },
        {
          "name": "behavior",
          "type": "group",
          "label": "Behavior settings",
          "importance": "low",
          "description": "These options will let you set some details",
          "optional": true,
          "fields": [
            {
              "name": "startingPosition",
              "type": "number",
              "label": "Slider start position in %",
              "description": "Sets the start position of the slider",
              "default": 50,
              "min": 0,
              "max": 100,
              "optional": false
            },
            {
              "name": "sliderOrientation",
              "type": "select",
              "label": "Slider orientation",
              "description": "Horizontal will move left and right, vertical will move up and down.",
              "options": [
                {
                  "value": "horizontal",
                  "label": "Horizontal"
                },
                {
                  "value": "vertical",
                  "label": "Vertical"
                }
              ],
              "default": "horizontal"
            },
            {
              "name": "sliderColor",
              "type": "text",
              "label": "Slider color",
              "importance": "medium",
              "optional": true,
              "default": "#f3f3f3",
              "widget": "colorSelector",
              "spectrum": {
                "showInput": true
              }
            }
          ]
        }
      ]
      ';
    }

    //H5P.InteractiveBook-1.2
    private function updatedInteractiveBookSemantics() {
      return '[
        {
          "name": "showCoverPage",
          "type": "boolean",
          "label": "Enable book cover",
          "description": "A cover that shows info regarding the book before access",
          "importance": "low",
          "default": false
        },
        {
          "name": "bookCover",
          "type": "group",
          "label": "Cover Page",
          "importance": "medium",
          "widget": "showWhen",
          "showWhen": {
            "rules": [
              {
                "field": "showCoverPage",
                "equals": true
              }
            ]
          },
          "fields": [
            {
              "name": "coverDescription",
              "type": "text",
              "widget": "html",
              "label": "Cover description",
              "importance": "medium",
              "optional": true,
              "description": "This text will be the description of your book.",
              "enterMode": "p",
              "tags": [
                "sub",
                "sup",
                "strong",
                "em",
                "p",
                "code"
              ]
            },
            {
              "name": "coverImage",
              "type": "image",
              "label": "Cover image",
              "importance": "low",
              "optional": true,
              "description": "An optional background image for the introduction."
            },
            {
              "name": "coverAltText",
              "type": "text",
              "label": "Cover image alternative text",
              "importance": "low",
              "optional": true,
              "description": "An alternative text for the cover image"
            }
          ]
        },
        {
          "name": "chapters",
          "type": "list",
          "label": "Pages",
          "entity": "Page",
          "widgets": [
            {
              "name": "VerticalTabs",
              "label": "Default"
            }
          ],
          "importance": "high",
          "min": 1,
          "max": 50,
          "field": {
            "name": "item",
            "type": "group",
            "label": "Item",
            "importance": "low",
            "expanded": true,
            "fields": [
              {
                "label": "Page",
                "name": "chapter",
                "type": "library",
                "options": [
                  "H5P.Column 1.12"
                ]
              }
            ]
          }
        },
        {
          "name": "behaviour",
          "type": "group",
          "importance": "low",
          "label": "Behavior settings",
          "fields": [
            {
              "name": "defaultTableOfContents",
              "type": "boolean",
              "label": "Display table of contents as default",
              "description": "When enabled the table of contents is showed when opening the book",
              "default": true
            },
            {
              "name": "progressIndicators",
              "type": "boolean",
              "label": "Display Progress Indicators",
              "description": "When enabled there will be indicators per page showing the user if he is done with the page or not.",
              "default": true
            },
            {
              "name": "progressAuto",
              "type": "boolean",
              "label": "Enable automatic progress",
              "description": "If enabled a page without tasks is considered done when viewed. A page with tasks when all tasks are done. If disabled there will be a button at the bottom of every page for the user to click when done with the page.",
              "default": true,
              "widget": "showWhen",
              "showWhen": {
                "rules": [
                  {
                    "field": "progressIndicators",
                    "equals": true
                  }
                ]
              }
            },
            {
              "name": "displaySummary",
              "type": "boolean",
              "label": "Display summary",
              "description": "When enabled the user can see a summary and submit the progress/answers",
              "default": true
            }
          ]
        },
        {
          "name": "read",
          "type": "text",
          "label": "Translation for \"Read\"",
          "importance": "low",
          "default": "Read",
          "common": true,
          "optional": true
        },
        {
          "name": "displayTOC",
          "type": "text",
          "label": "Translation for \"Display Table of contents\"",
          "importance": "low",
          "default": "Display Table of contents",
          "common": true,
          "optional": true
        },
        {
          "name": "hideTOC",
          "type": "text",
          "label": "Translation for \"Hide Table of contents\"",
          "importance": "low",
          "default": "Hide Table of contents",
          "common": true,
          "optional": true
        },
        {
          "name": "nextPage",
          "type": "text",
          "label": "Translation for \"Next page\"",
          "importance": "low",
          "default": "Next page",
          "common": true,
          "optional": true
        },
        {
          "name": "previousPage",
          "type": "text",
          "label": "Translation for \"Previous page\"",
          "importance": "low",
          "default": "Previous page",
          "common": true,
          "optional": true
        },
        {
          "name": "chapterCompleted",
          "type": "text",
          "label": "Translation for \"Page completed!\"",
          "importance": "low",
          "default": "Page completed!",
          "common": true,
          "optional": true
        },
        {
          "name": "partCompleted",
          "type": "text",
          "label": "Translation for \"@pages of @total completed\" (@pages and @total will be replaced by actual values)",
          "importance": "low",
          "default": "@pages of @total completed",
          "common": true,
          "optional": true
        },
        {
          "name": "incompleteChapter",
          "type": "text",
          "label": "Translation for \"Incomplete page\"",
          "importance": "low",
          "default": "Incomplete page",
          "common": true,
          "optional": true
        },
        {
          "name": "navigateToTop",
          "type": "text",
          "label": "Translation for \"Navigate to the top\"",
          "importance": "low",
          "default": "Navigate to the top",
          "common": true,
          "optional": true
        },
        {
          "name": "markAsFinished",
          "type": "text",
          "importance": "low",
          "label": "Translation for \"I have finished this page\"",
          "default": "I have finished this page",
          "common": true,
          "optional": true
        },
        {
          "name": "fullscreen",
          "type": "text",
          "importance": "low",
          "label": "Fullscreen button label",
          "default": "Fullscreen",
          "common": true,
          "optional": true
        },
        {
          "name": "exitFullscreen",
          "type": "text",
          "importance": "low",
          "label": "Exit fullscreen button label",
          "default": "Exit fullscreen",
          "common": true,
          "optional": true
        },
        {
          "name": "bookProgressSubtext",
          "type": "text",
          "importance": "low",
          "label": "Page progress in book",
          "description": "\"@count\" will be replaced by page count, and \"@total\" with the total number of pages",
          "default": "@count of @total pages",
          "common": true,
          "optional": true
        },
        {
          "name": "interactionsProgressSubtext",
          "type": "text",
          "importance": "low",
          "label": "Interaction progress",
          "description": "\"@count\" will be replaced by page count, and \"@total\" with the total number of pages",
          "default": "@count of @total interactions",
          "common": true,
          "optional": true
        },
        {
          "name": "submitReport",
          "type": "text",
          "importance": "low",
          "label": "Translation for \"Submit report\"",
          "default": "Submit Report",
          "common": true,
          "optional": true
        },
        {
          "name": "restartLabel",
          "type": "text",
          "importance": "low",
          "label": "Label for \"restart\" button",
          "default": "Restart",
          "common": true,
          "optional": true
        },
        {
          "name": "summaryHeader",
          "type": "text",
          "importance": "low",
          "label": "Summary header",
          "default": "Summary",
          "common": true,
          "optional": true
        },
        {
          "name": "allInteractions",
          "type": "text",
          "importance": "low",
          "label": "Translation for \"All interactions\"",
          "default": "All interactions",
          "common": true,
          "optional": true
        },
        {
          "name": "unansweredInteractions",
          "type": "text",
          "importance": "low",
          "label": "Translation for \"Unanswered interactions\"",
          "default": "Unanswered interactions",
          "common": true,
          "optional": true
        },
        {
          "name": "scoreText",
          "type": "text",
          "importance": "low",
          "label": "Score",
          "description": "\"@score\" will be replaced with current score, and \"@maxscore\" will be replaced with max achievable score",
          "default": "@score / @maxscore",
          "common": true,
          "optional": true
        },
        {
          "name": "leftOutOfTotalCompleted",
          "type": "text",
          "importance": "low",
          "label": "Per page interactions completion",
          "description": "\"@left\" will be replaced with remaining interactions, and \"@max\" will be replaced with total number of interactions on the page",
          "default": "@left of @max interactions completed",
          "common": true,
          "optional": true
        },
        {
          "name": "noInteractions",
          "type": "text",
          "importance": "low",
          "label": "Translation for \"No interactions\"",
          "default": "No interactions",
          "common": true,
          "optional": true
        },
        {
          "name": "score",
          "type": "text",
          "importance": "low",
          "label": "Translation for \"Score\"",
          "default": "Score",
          "common": true,
          "optional": true
        },
        {
          "name": "summaryAndSubmit",
          "type": "text",
          "importance": "low",
          "label": "Label for \"Summary & submit\" button",
          "default": "Summary & submit",
          "common": true,
          "optional": true
        },
        {
          "name": "noChapterInteractionBoldText",
          "type": "text",
          "importance": "low",
          "label": "Translation for \"You have not interacted with any pages.\"",
          "default": "You have not interacted with any pages.",
          "common": true,
          "optional": true
        },
        {
          "name": "noChapterInteractionText",
          "type": "text",
          "importance": "low",
          "label": "Translation for \"You have to interact with at least one page before you can see the summary.\"",
          "default": "You have to interact with at least one page before you can see the summary.",
          "common": true,
          "optional": true
        },
        {
          "name": "yourAnswersAreSubmittedForReview",
          "type": "text",
          "importance": "low",
          "label": "Translation for \"Your answers are submitted for review!\"",
          "default": "Your answers are submitted for review!",
          "common": true,
          "optional": true
        },
        {
          "name": "bookProgress",
          "type": "text",
          "importance": "low",
          "label": "Summary progress label",
          "default": "Book progress",
          "common": true,
          "optional": true
        },
        {
          "name": "interactionsProgress",
          "type": "text",
          "importance": "low",
          "label": "Interactions progress label",
          "default": "Interactions progress",
          "common": true,
          "optional": true
        },
        {
          "name": "totalScoreLabel",
          "type": "text",
          "importance": "low",
          "label": "Total score label",
          "default": "Total score",
          "common": true,
          "optional": true
        },
        {
          "name": "a11y",
          "type": "group",
          "label": "Accessibility texts",
          "common": true,
          "fields": [
            {
              "name": "progress",
              "type": "text",
              "label": "Page progress textual alternative",
              "description": "An alternative text for the visual page progress. @page and @total variables available.",
              "default": "Page @page of @total."
            },
            {
              "name": "menu",
              "type": "text",
              "label": "Label for expanding/collapsing navigation menu",
              "default": "Toggle navigation menu"
            }
          ]
        }
      ]';
    }

    //H5P.BrightcoveInteractiveVideo-1.0
    private function updatedBrightcoveInteractiveVideoSemantics() {
      return '[
        {
          "name": "interactiveVideo",
          "type": "group",
          "widget": "wizard",
          "label": "Interactive Video Editor",
          "importance": "high",
          "fields": [
            {
              "name": "assets",
              "type": "group",
              "label": "Add interactions",
              "importance": "high",
              "widget": "interactiveVideo",
              "video": "video/files",
              "poster": "video/startScreenOptions/poster",
              "fields": [
                {
                  "name": "interactions",
                  "type": "list",
                  "field": {
                    "name": "interaction",
                    "type": "group",
                    "fields": [
                      {
                        "name": "duration",
                        "type": "group",
                        "widget": "duration",
                        "label": "Display time",
                        "importance": "low",
                        "fields": [
                          {
                            "name": "from",
                            "type": "number"
                          },
                          {
                            "name": "to",
                            "type": "number"
                          }
                        ]
                      },
                      {
                        "name": "pause",
                        "label": "Pause video",
                        "importance": "low",
                        "type": "boolean"
                      },
                      {
                        "name": "displayType",
                        "label": "Display as",
                        "importance": "low",
                        "description": "<b>Button</b> is a collapsed interaction the user must press to open. <b>Poster</b> is an expanded interaction displayed directly on top of the video",
                        "type": "select",
                        "widget": "imageRadioButtonGroup",
                        "options": [
                          {
                            "value": "button",
                            "label": "Button"
                          },
                          {
                            "value": "poster",
                            "label": "Poster"
                          }
                        ],
                        "default": "button"
                      },
                      {
                        "name": "buttonOnMobile",
                        "label": "Turn into button on small screens",
                        "importance": "low",
                        "type": "boolean",
                        "default": false
                      },
                      {
                        "name": "label",
                        "type": "text",
                        "widget": "html",
                        "label": "Label",
                        "importance": "low",
                        "description": "Label displayed next to interaction icon.",
                        "optional": true,
                        "enterMode": "p",
                        "tags": [
                          "p"
                        ]
                      },
                      {
                        "name": "x",
                        "type": "number",
                        "importance": "low",
                        "widget": "none"
                      },
                      {
                        "name": "y",
                        "type": "number",
                        "importance": "low",
                        "widget": "none"
                      },
                      {
                        "name": "width",
                        "type": "number",
                        "widget": "none",
                        "importance": "low",
                        "optional": true
                      },
                      {
                        "name": "height",
                        "type": "number",
                        "widget": "none",
                        "importance": "low",
                        "optional": true
                      },
                      {
                        "name": "libraryTitle",
                        "type": "text",
                        "importance": "low",
                        "optional": true,
                        "widget": "none"
                      },
                      {
                        "name": "action",
                        "type": "library",
                        "importance": "low",
                        "options": [
                          "H5P.Nil 1.0",
                          "H5P.Text 1.1",
                          "H5P.Table 1.1",
                          "H5P.Link 1.3",
                          "H5P.Image 1.1",
                          "H5P.Summary 1.10",
                          "H5P.SingleChoiceSet 1.11",
                          "H5P.MultiChoice 1.14",
                          "H5P.TrueFalse 1.6",
                          "H5P.Blanks 1.12",
                          "H5P.DragQuestion 1.13",
                          "H5P.MarkTheWords 1.9",
                          "H5P.DragText 1.8",
                          "H5P.GoToQuestion 1.3",
                          "H5P.IVHotspot 1.2",
                          "H5P.Questionnaire 1.3",
                          "H5P.FreeTextQuestion 1.0"
                        ]
                      },
                      {
                        "name": "adaptivity",
                        "type": "group",
                        "label": "Adaptivity",
                        "importance": "low",
                        "optional": true,
                        "fields": [
                          {
                            "name": "correct",
                            "type": "group",
                            "label": "Action on all correct",
                            "fields": [
                              {
                                "name": "seekTo",
                                "type": "number",
                                "widget": "timecode",
                                "label": "Seek to",
                                "description": "Enter timecode in the format M:SS"
                              },
                              {
                                "name": "allowOptOut",
                                "type": "boolean",
                                "label": "Allow the user to opt out and continue"
                              },
                              {
                                "name": "message",
                                "type": "text",
                                "widget": "html",
                                "enterMode": "p",
                                "tags": [
                                  "strong",
                                  "em",
                                  "del",
                                  "a",
                                  "code"
                                ],
                                "label": "Message"
                              },
                              {
                                "name": "seekLabel",
                                "type": "text",
                                "label": "Label for seek button"
                              }
                            ]
                          },
                          {
                            "name": "wrong",
                            "type": "group",
                            "label": "Action on wrong",
                            "fields": [
                              {
                                "name": "seekTo",
                                "type": "number",
                                "widget": "timecode",
                                "label": "Seek to",
                                "description": "Enter timecode in the format M:SS"
                              },
                              {
                                "name": "allowOptOut",
                                "type": "boolean",
                                "label": "Allow the user to opt out and continue"
                              },
                              {
                                "name": "message",
                                "type": "text",
                                "widget": "html",
                                "enterMode": "p",
                                "tags": [
                                  "strong",
                                  "em",
                                  "del",
                                  "a",
                                  "code"
                                ],
                                "label": "Message"
                              },
                              {
                                "name": "seekLabel",
                                "type": "text",
                                "label": "Label for seek button"
                              }
                            ]
                          },
                          {
                            "name": "requireCompletion",
                            "type": "boolean",
                            "label": "Require full score for task before proceeding",
                            "description": "For best functionality this option should be used in conjunction with the \"Prevent skipping forward in a video\" option of Interactive Video."
                          }
                        ]
                      },
                      {
                        "name": "visuals",
                        "label": "Visuals",
                        "importance": "low",
                        "type": "group",
                        "fields": [
                          {
                            "name": "backgroundColor",
                            "type": "text",
                            "label": "Background color",
                            "widget": "colorSelector",
                            "default": "rgb(255, 255, 255)",
                            "spectrum": {
                              "showInput": true,
                              "showAlpha": true,
                              "preferredFormat": "rgb",
                              "showPalette": true,
                              "palette": [
                                [
                                  "rgba(0, 0, 0, 0)"
                                ],
                                [
                                  "rgb(67, 67, 67)",
                                  "rgb(102, 102, 102)",
                                  "rgb(204, 204, 204)",
                                  "rgb(217, 217, 217)",
                                  "rgb(255, 255, 255)"
                                ],
                                [
                                  "rgb(152, 0, 0)",
                                  "rgb(255, 0, 0)",
                                  "rgb(255, 153, 0)",
                                  "rgb(255, 255, 0)",
                                  "rgb(0, 255, 0)",
                                  "rgb(0, 255, 255)",
                                  "rgb(74, 134, 232)",
                                  "rgb(0, 0, 255)",
                                  "rgb(153, 0, 255)",
                                  "rgb(255, 0, 255)"
                                ],
                                [
                                  "rgb(230, 184, 175)",
                                  "rgb(244, 204, 204)",
                                  "rgb(252, 229, 205)",
                                  "rgb(255, 242, 204)",
                                  "rgb(217, 234, 211)",
                                  "rgb(208, 224, 227)",
                                  "rgb(201, 218, 248)",
                                  "rgb(207, 226, 243)",
                                  "rgb(217, 210, 233)",
                                  "rgb(234, 209, 220)",
                                  "rgb(221, 126, 107)",
                                  "rgb(234, 153, 153)",
                                  "rgb(249, 203, 156)",
                                  "rgb(255, 229, 153)",
                                  "rgb(182, 215, 168)",
                                  "rgb(162, 196, 201)",
                                  "rgb(164, 194, 244)",
                                  "rgb(159, 197, 232)",
                                  "rgb(180, 167, 214)",
                                  "rgb(213, 166, 189)",
                                  "rgb(204, 65, 37)",
                                  "rgb(224, 102, 102)",
                                  "rgb(246, 178, 107)",
                                  "rgb(255, 217, 102)",
                                  "rgb(147, 196, 125)",
                                  "rgb(118, 165, 175)",
                                  "rgb(109, 158, 235)",
                                  "rgb(111, 168, 220)",
                                  "rgb(142, 124, 195)",
                                  "rgb(194, 123, 160)",
                                  "rgb(166, 28, 0)",
                                  "rgb(204, 0, 0)",
                                  "rgb(230, 145, 56)",
                                  "rgb(241, 194, 50)",
                                  "rgb(106, 168, 79)",
                                  "rgb(69, 129, 142)",
                                  "rgb(60, 120, 216)",
                                  "rgb(61, 133, 198)",
                                  "rgb(103, 78, 167)",
                                  "rgb(166, 77, 121)",
                                  "rgb(91, 15, 0)",
                                  "rgb(102, 0, 0)",
                                  "rgb(120, 63, 4)",
                                  "rgb(127, 96, 0)",
                                  "rgb(39, 78, 19)",
                                  "rgb(12, 52, 61)",
                                  "rgb(28, 69, 135)",
                                  "rgb(7, 55, 99)",
                                  "rgb(32, 18, 77)",
                                  "rgb(76, 17, 48)"
                                ]
                              ]
                            }
                          },
                          {
                            "name": "VisualtextColor",
                            "type": "text",
                            "label": "Text color",
                            "widget": "colorSelector",
                            "default": "rgb(67, 67, 67)",
                            "spectrum": {
                              "showInput": true,
                              "showAlpha": true,
                              "preferredFormat": "rgb",
                              "showPalette": true,
                              "palette": [
                                [
                                  "rgba(0, 0, 0, 0)"
                                ],
                                [
                                  "rgb(67, 67, 67)",
                                  "rgb(102, 102, 102)",
                                  "rgb(204, 204, 204)",
                                  "rgb(217, 217, 217)",
                                  "rgb(255, 255, 255)"
                                ],
                                [
                                  "rgb(152, 0, 0)",
                                  "rgb(255, 0, 0)",
                                  "rgb(255, 153, 0)",
                                  "rgb(255, 255, 0)",
                                  "rgb(0, 255, 0)",
                                  "rgb(0, 255, 255)",
                                  "rgb(74, 134, 232)",
                                  "rgb(0, 0, 255)",
                                  "rgb(153, 0, 255)",
                                  "rgb(255, 0, 255)"
                                ],
                                [
                                  "rgb(230, 184, 175)",
                                  "rgb(244, 204, 204)",
                                  "rgb(252, 229, 205)",
                                  "rgb(255, 242, 204)",
                                  "rgb(217, 234, 211)",
                                  "rgb(208, 224, 227)",
                                  "rgb(201, 218, 248)",
                                  "rgb(207, 226, 243)",
                                  "rgb(217, 210, 233)",
                                  "rgb(234, 209, 220)",
                                  "rgb(221, 126, 107)",
                                  "rgb(234, 153, 153)",
                                  "rgb(249, 203, 156)",
                                  "rgb(255, 229, 153)",
                                  "rgb(182, 215, 168)",
                                  "rgb(162, 196, 201)",
                                  "rgb(164, 194, 244)",
                                  "rgb(159, 197, 232)",
                                  "rgb(180, 167, 214)",
                                  "rgb(213, 166, 189)",
                                  "rgb(204, 65, 37)",
                                  "rgb(224, 102, 102)",
                                  "rgb(246, 178, 107)",
                                  "rgb(255, 217, 102)",
                                  "rgb(147, 196, 125)",
                                  "rgb(118, 165, 175)",
                                  "rgb(109, 158, 235)",
                                  "rgb(111, 168, 220)",
                                  "rgb(142, 124, 195)",
                                  "rgb(194, 123, 160)",
                                  "rgb(166, 28, 0)",
                                  "rgb(204, 0, 0)",
                                  "rgb(230, 145, 56)",
                                  "rgb(241, 194, 50)",
                                  "rgb(106, 168, 79)",
                                  "rgb(69, 129, 142)",
                                  "rgb(60, 120, 216)",
                                  "rgb(61, 133, 198)",
                                  "rgb(103, 78, 167)",
                                  "rgb(166, 77, 121)",
                                  "rgb(91, 15, 0)",
                                  "rgb(102, 0, 0)",
                                  "rgb(120, 63, 4)",
                                  "rgb(127, 96, 0)",
                                  "rgb(39, 78, 19)",
                                  "rgb(12, 52, 61)",
                                  "rgb(28, 69, 135)",
                                  "rgb(7, 55, 99)",
                                  "rgb(32, 18, 77)",
                                  "rgb(76, 17, 48)"
                                ]
                              ]
                            }
                          },
                          {
                            "name": "Submitbgcolor",
                            "type": "text",
                            "label": "Submit button color",
                            "widget": "colorSelector",
                            "default": "rgb(45, 109, 179)",
                            "spectrum": {
                              "showInput": true,
                              "showAlpha": true,
                              "preferredFormat": "rgb",
                              "showPalette": true,
                              "palette": [
                                [
                                  "rgba(0, 0, 0, 0)"
                                ],
                                [
                                  "rgb(67, 67, 67)",
                                  "rgb(102, 102, 102)",
                                  "rgb(204, 204, 204)",
                                  "rgb(217, 217, 217)",
                                  "rgb(255, 255, 255)"
                                ],
                                [
                                  "rgb(152, 0, 0)",
                                  "rgb(255, 0, 0)",
                                  "rgb(255, 153, 0)",
                                  "rgb(255, 255, 0)",
                                  "rgb(0, 255, 0)",
                                  "rgb(0, 255, 255)",
                                  "rgb(74, 134, 232)",
                                  "rgb(0, 0, 255)",
                                  "rgb(153, 0, 255)",
                                  "rgb(255, 0, 255)"
                                ],
                                [
                                  "rgb(230, 184, 175)",
                                  "rgb(244, 204, 204)",
                                  "rgb(252, 229, 205)",
                                  "rgb(255, 242, 204)",
                                  "rgb(217, 234, 211)",
                                  "rgb(208, 224, 227)",
                                  "rgb(201, 218, 248)",
                                  "rgb(207, 226, 243)",
                                  "rgb(217, 210, 233)",
                                  "rgb(234, 209, 220)",
                                  "rgb(221, 126, 107)",
                                  "rgb(234, 153, 153)",
                                  "rgb(249, 203, 156)",
                                  "rgb(255, 229, 153)",
                                  "rgb(182, 215, 168)",
                                  "rgb(162, 196, 201)",
                                  "rgb(164, 194, 244)",
                                  "rgb(159, 197, 232)",
                                  "rgb(180, 167, 214)",
                                  "rgb(213, 166, 189)",
                                  "rgb(204, 65, 37)",
                                  "rgb(224, 102, 102)",
                                  "rgb(246, 178, 107)",
                                  "rgb(255, 217, 102)",
                                  "rgb(147, 196, 125)",
                                  "rgb(118, 165, 175)",
                                  "rgb(109, 158, 235)",
                                  "rgb(111, 168, 220)",
                                  "rgb(142, 124, 195)",
                                  "rgb(194, 123, 160)",
                                  "rgb(166, 28, 0)",
                                  "rgb(204, 0, 0)",
                                  "rgb(230, 145, 56)",
                                  "rgb(241, 194, 50)",
                                  "rgb(106, 168, 79)",
                                  "rgb(69, 129, 142)",
                                  "rgb(60, 120, 216)",
                                  "rgb(61, 133, 198)",
                                  "rgb(103, 78, 167)",
                                  "rgb(166, 77, 121)",
                                  "rgb(91, 15, 0)",
                                  "rgb(102, 0, 0)",
                                  "rgb(120, 63, 4)",
                                  "rgb(127, 96, 0)",
                                  "rgb(39, 78, 19)",
                                  "rgb(12, 52, 61)",
                                  "rgb(28, 69, 135)",
                                  "rgb(7, 55, 99)",
                                  "rgb(32, 18, 77)",
                                  "rgb(76, 17, 48)"
                                ]
                              ]
                            }
                          },
                          {
                            "name": "Submittextcolor",
                            "type": "text",
                            "label": "Submit text color",
                            "widget": "colorSelector",
                            "default": "rgb(255, 255, 255)",
                            "spectrum": {
                              "showInput": true,
                              "showAlpha": true,
                              "preferredFormat": "rgb",
                              "showPalette": true,
                              "palette": [
                                [
                                  "rgba(0, 0, 0, 0)"
                                ],
                                [
                                  "rgb(67, 67, 67)",
                                  "rgb(102, 102, 102)",
                                  "rgb(204, 204, 204)",
                                  "rgb(217, 217, 217)",
                                  "rgb(255, 255, 255)"
                                ],
                                [
                                  "rgb(152, 0, 0)",
                                  "rgb(255, 0, 0)",
                                  "rgb(255, 153, 0)",
                                  "rgb(255, 255, 0)",
                                  "rgb(0, 255, 0)",
                                  "rgb(0, 255, 255)",
                                  "rgb(74, 134, 232)",
                                  "rgb(0, 0, 255)",
                                  "rgb(153, 0, 255)",
                                  "rgb(255, 0, 255)"
                                ],
                                [
                                  "rgb(230, 184, 175)",
                                  "rgb(244, 204, 204)",
                                  "rgb(252, 229, 205)",
                                  "rgb(255, 242, 204)",
                                  "rgb(217, 234, 211)",
                                  "rgb(208, 224, 227)",
                                  "rgb(201, 218, 248)",
                                  "rgb(207, 226, 243)",
                                  "rgb(217, 210, 233)",
                                  "rgb(234, 209, 220)",
                                  "rgb(221, 126, 107)",
                                  "rgb(234, 153, 153)",
                                  "rgb(249, 203, 156)",
                                  "rgb(255, 229, 153)",
                                  "rgb(182, 215, 168)",
                                  "rgb(162, 196, 201)",
                                  "rgb(164, 194, 244)",
                                  "rgb(159, 197, 232)",
                                  "rgb(180, 167, 214)",
                                  "rgb(213, 166, 189)",
                                  "rgb(204, 65, 37)",
                                  "rgb(224, 102, 102)",
                                  "rgb(246, 178, 107)",
                                  "rgb(255, 217, 102)",
                                  "rgb(147, 196, 125)",
                                  "rgb(118, 165, 175)",
                                  "rgb(109, 158, 235)",
                                  "rgb(111, 168, 220)",
                                  "rgb(142, 124, 195)",
                                  "rgb(194, 123, 160)",
                                  "rgb(166, 28, 0)",
                                  "rgb(204, 0, 0)",
                                  "rgb(230, 145, 56)",
                                  "rgb(241, 194, 50)",
                                  "rgb(106, 168, 79)",
                                  "rgb(69, 129, 142)",
                                  "rgb(60, 120, 216)",
                                  "rgb(61, 133, 198)",
                                  "rgb(103, 78, 167)",
                                  "rgb(166, 77, 121)",
                                  "rgb(91, 15, 0)",
                                  "rgb(102, 0, 0)",
                                  "rgb(120, 63, 4)",
                                  "rgb(127, 96, 0)",
                                  "rgb(39, 78, 19)",
                                  "rgb(12, 52, 61)",
                                  "rgb(28, 69, 135)",
                                  "rgb(7, 55, 99)",
                                  "rgb(32, 18, 77)",
                                  "rgb(76, 17, 48)"
                                ]
                              ]
                            }
                          },
                          {
                            "name": "iconbackgroundColor",
                            "type": "text",
                            "label": "Icon Background color",
                            "widget": "colorSelector",
                            "default": "rgb(152, 29, 153)",
                            "spectrum": {
                              "showInput": true,
                              "showAlpha": true,
                              "preferredFormat": "rgb",
                              "showPalette": true,
                              "palette": [
                                [
                                  "rgba(0, 0, 0, 0)"
                                ],
                                [
                                  "rgb(67, 67, 67)",
                                  "rgb(102, 102, 102)",
                                  "rgb(204, 204, 204)",
                                  "rgb(217, 217, 217)",
                                  "rgb(255, 255, 255)"
                                ],
                                [
                                  "rgb(152, 0, 0)",
                                  "rgb(255, 0, 0)",
                                  "rgb(255, 153, 0)",
                                  "rgb(255, 255, 0)",
                                  "rgb(0, 255, 0)",
                                  "rgb(0, 255, 255)",
                                  "rgb(74, 134, 232)",
                                  "rgb(0, 0, 255)",
                                  "rgb(153, 0, 255)",
                                  "rgb(255, 0, 255)"
                                ],
                                [
                                  "rgb(230, 184, 175)",
                                  "rgb(244, 204, 204)",
                                  "rgb(252, 229, 205)",
                                  "rgb(255, 242, 204)",
                                  "rgb(217, 234, 211)",
                                  "rgb(208, 224, 227)",
                                  "rgb(201, 218, 248)",
                                  "rgb(207, 226, 243)",
                                  "rgb(217, 210, 233)",
                                  "rgb(234, 209, 220)",
                                  "rgb(221, 126, 107)",
                                  "rgb(234, 153, 153)",
                                  "rgb(249, 203, 156)",
                                  "rgb(255, 229, 153)",
                                  "rgb(182, 215, 168)",
                                  "rgb(162, 196, 201)",
                                  "rgb(164, 194, 244)",
                                  "rgb(159, 197, 232)",
                                  "rgb(180, 167, 214)",
                                  "rgb(213, 166, 189)",
                                  "rgb(204, 65, 37)",
                                  "rgb(224, 102, 102)",
                                  "rgb(246, 178, 107)",
                                  "rgb(255, 217, 102)",
                                  "rgb(147, 196, 125)",
                                  "rgb(118, 165, 175)",
                                  "rgb(109, 158, 235)",
                                  "rgb(111, 168, 220)",
                                  "rgb(142, 124, 195)",
                                  "rgb(194, 123, 160)",
                                  "rgb(166, 28, 0)",
                                  "rgb(204, 0, 0)",
                                  "rgb(230, 145, 56)",
                                  "rgb(241, 194, 50)",
                                  "rgb(106, 168, 79)",
                                  "rgb(69, 129, 142)",
                                  "rgb(60, 120, 216)",
                                  "rgb(61, 133, 198)",
                                  "rgb(103, 78, 167)",
                                  "rgb(166, 77, 121)",
                                  "rgb(91, 15, 0)",
                                  "rgb(102, 0, 0)",
                                  "rgb(120, 63, 4)",
                                  "rgb(127, 96, 0)",
                                  "rgb(39, 78, 19)",
                                  "rgb(12, 52, 61)",
                                  "rgb(28, 69, 135)",
                                  "rgb(7, 55, 99)",
                                  "rgb(32, 18, 77)",
                                  "rgb(76, 17, 48)"
                                ]
                              ]
                            }
                          },
                          {
                            "name": "boxShadow",
                            "type": "boolean",
                            "label": "Box shadow",
                            "default": true,
                            "description": "Adds a subtle shadow around the interaction. You might want to disable this for completely transparent interactions"
                          }
                        ]
                      },
                      {
                        "name": "goto",
                        "label": "Go to on click",
                        "importance": "low",
                        "type": "group",
                        "fields": [
                          {
                            "name": "type",
                            "label": "Type",
                            "type": "select",
                            "widget": "selectToggleFields",
                            "options": [
                              {
                                "value": "timecode",
                                "label": "Timecode",
                                "hideFields": [
                                  "url"
                                ]
                              },
                              {
                                "value": "url",
                                "label": "Another page (URL)",
                                "hideFields": [
                                  "time"
                                ]
                              }
                            ],
                            "optional": true
                          },
                          {
                            "name": "time",
                            "type": "number",
                            "widget": "timecode",
                            "label": "Go To",
                            "description": "The target time the user will be taken to upon pressing the hotspot. Enter timecode in the format M:SS.",
                            "optional": true
                          },
                          {
                            "name": "url",
                            "type": "group",
                            "label": "URL",
                            "widget": "linkWidget",
                            "optional": true,
                            "fields": [
                              {
                                "name": "protocol",
                                "type": "select",
                                "label": "Protocol",
                                "options": [
                                  {
                                    "value": "http://",
                                    "label": "http://"
                                  },
                                  {
                                    "value": "https://",
                                    "label": "https://"
                                  },
                                  {
                                    "value": "/",
                                    "label": "(root relative)"
                                  },
                                  {
                                    "value": "other",
                                    "label": "other"
                                  }
                                ],
                                "optional": true,
                                "default": "http://"
                              },
                              {
                                "name": "url",
                                "type": "text",
                                "label": "URL",
                                "optional": true
                              }
                            ]
                          },
                          {
                            "name": "visualize",
                            "type": "boolean",
                            "label": "Visualize",
                            "description": "Show that interaction can be clicked by adding a border and an icon"
                          }
                        ]
                      }
                    ]
                  }
                },
                {
                  "name": "bookmarks",
                  "importance": "low",
                  "type": "list",
                  "field": {
                    "name": "bookmark",
                    "type": "group",
                    "fields": [
                      {
                        "name": "time",
                        "type": "number"
                      },
                      {
                        "name": "label",
                        "type": "text"
                      }
                    ]
                  }
                },
                {
                  "name": "endscreens",
                  "importance": "low",
                  "type": "list",
                  "field": {
                    "name": "endscreen",
                    "type": "group",
                    "fields": [
                      {
                        "name": "time",
                        "type": "number"
                      },
                      {
                        "name": "label",
                        "type": "text"
                      }
                    ]
                  }
                }
              ]
            },
            {
              "name": "summary",
              "type": "group",
              "label": "Summary task",
              "importance": "high",
              "fields": [
                {
                  "name": "task",
                  "type": "library",
                  "options": [
                    "H5P.Summary 1.10"
                  ],
                  "default": {
                    "library": "H5P.Summary 1.10",
                    "params": {}
                  }
                },
                {
                  "name": "displayAt",
                  "type": "number",
                  "label": "Display at",
                  "description": "Number of seconds before the video ends.",
                  "default": 3
                }
              ]
            },
            {
              "name": "video",
              "type": "group",
              "label": "Setup video",
              "importance": "high",
              "fields": [
                {
                  "name": "brightcoveVideoID",
                  "type": "text",
                  "label": "Video ID",
                  "description": "Brightcove Video ID",
                  "importance": "high"
                },
                {
                  "name": "files",
                  "type": "video",
                  "label": "Add a video",
                  "description": "Click below to add a video you wish to use in your interactive video. You can add a video link or upload video files. It is possible to add several versions of the video with different qualities. To ensure maximum support in browsers at least add a version in webm and mp4 formats.",
                  "extraAttributes": [
                    "metadata"
                  ],
                  "enableCustomQualityLabel": true
                },
                {
                  "name": "startScreenOptions",
                  "type": "group",
                  "label": "Start screen options (unsupported for YouTube videos)",
                  "importance": "low",
                  "fields": [
                    {
                      "name": "title",
                      "type": "text",
                      "label": "The title of this interactive video",
                      "importance": "low",
                      "maxLength": 60,
                      "default": "Brightcove Interactive Video",
                      "description": "Used in summaries, statistics etc."
                    },
                    {
                      "name": "hideStartTitle",
                      "type": "boolean",
                      "label": "Hide title on video start screen",
                      "importance": "low",
                      "optional": true,
                      "default": false
                    },
                    {
                      "name": "shortStartDescription",
                      "type": "text",
                      "label": "Short description (Optional)",
                      "importance": "low",
                      "optional": true,
                      "maxLength": 120,
                      "description": "Optional. Display a short description text on the video start screen. Does not work for YouTube videos."
                    },
                    {
                      "name": "poster",
                      "type": "image",
                      "label": "Poster image",
                      "importance": "low",
                      "optional": true,
                      "description": "Image displayed before the user launches the video. Does not work for YouTube Videos."
                    }
                  ]
                },
                {
                  "name": "textTracks",
                  "type": "group",
                  "label": "Text tracks (unsupported for YouTube videos)",
                  "importance": "low",
                  "fields": [
                    {
                      "name": "videoTrack",
                      "type": "list",
                      "label": "Available text tracks",
                      "importance": "low",
                      "optional": true,
                      "entity": "Track",
                      "min": 0,
                      "defaultNum": 1,
                      "field": {
                        "name": "track",
                        "type": "group",
                        "label": "Track",
                        "importance": "low",
                        "expanded": false,
                        "fields": [
                          {
                            "name": "label",
                            "type": "text",
                            "label": "Track label",
                            "description": "Used if you offer multiple tracks and the user has to choose a track. For instance Spanish subtitles could be the label of a Spanish subtitle track.",
                            "importance": "low",
                            "default": "Subtitles",
                            "optional": true
                          },
                          {
                            "name": "kind",
                            "type": "select",
                            "label": "Type of text track",
                            "importance": "low",
                            "default": "subtitles",
                            "options": [
                              {
                                "value": "subtitles",
                                "label": "Subtitles"
                              },
                              {
                                "value": "captions",
                                "label": "Captions"
                              },
                              {
                                "value": "descriptions",
                                "label": "Descriptions"
                              }
                            ]
                          },
                          {
                            "name": "srcLang",
                            "type": "text",
                            "label": "Source language, must be defined for subtitles",
                            "importance": "low",
                            "default": "en",
                            "description": "Must be a valid BCP 47 language tag. If Subtitles is the type of text track selected, the source language of the track must be defined."
                          },
                          {
                            "name": "track",
                            "type": "file",
                            "label": "Track source (WebVTT file)",
                            "importance": "low"
                          }
                        ]
                      }
                    },
                    {
                      "name": "defaultTrackLabel",
                      "type": "text",
                      "label": "Default text track",
                      "description": "If left empty or not matching any of the text tracks the first text track will be used as the default.",
                      "importance": "low",
                      "optional": true
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name": "override",
          "type": "group",
          "label": "Behavior settings",
          "importance": "low",
          "optional": true,
          "fields": [
            {
              "name": "startVideoAt",
              "type": "number",
              "widget": "timecode",
              "label": "Start video at",
              "importance": "low",
              "optional": true,
              "description": "Enter timecode in the format M:SS"
            },
            {
              "name": "autoplay",
              "type": "boolean",
              "label": "Auto-play video",
              "default": false,
              "optional": true,
              "description": "Start playing the video automatically"
            },
            {
              "name": "loop",
              "type": "boolean",
              "label": "Loop the video",
              "default": false,
              "optional": true,
              "description": "Check if video should run in a loop"
            },
            {
              "name": "showSolutionButton",
              "type": "select",
              "label": "Override \"Show Solution\" button",
              "importance": "low",
              "description": "This option determines if the \"Show Solution\" button will be shown for all questions, disabled for all or configured for each question individually.",
              "optional": true,
              "options": [
                {
                  "value": "on",
                  "label": "Enabled"
                },
                {
                  "value": "off",
                  "label": "Disabled"
                }
              ]
            },
            {
              "name": "retryButton",
              "type": "select",
              "label": "Override \"Retry\" button",
              "importance": "low",
              "description": "This option determines if the \"Retry\" button will be shown for all questions, disabled for all or configured for each question individually.",
              "optional": true,
              "options": [
                {
                  "value": "on",
                  "label": "Enabled"
                },
                {
                  "value": "off",
                  "label": "Disabled"
                }
              ]
            },
            {
              "name": "showBookmarksmenuOnLoad",
              "type": "boolean",
              "label": "Start with bookmarks menu open",
              "importance": "low",
              "default": false,
              "description": "This function is not available on iPad when using YouTube as video source."
            },
            {
              "name": "showRewind10",
              "type": "boolean",
              "label": "Show button for rewinding 10 seconds",
              "importance": "low",
              "default": false
            },
            {
              "name": "preventSkipping",
              "type": "boolean",
              "default": false,
              "label": "Prevent skipping forward in a video",
              "importance": "low",
              "description": "Enabling this options will disable user video navigation through default controls."
            },
            {
              "name": "deactivateSound",
              "type": "boolean",
              "default": false,
              "label": "Deactivate sound",
              "importance": "low",
              "description": "Enabling this option will deactivate the videos sound and prevent it from being switched on."
            },
            {
              "name": "hideh5pactionoption",
              "type": "boolean",
              "default": false,
              "label": "Hide H5P Bottom Action Bar",
              "importance": "low"
            },
            {
              "name": "attachcustomcss",
              "type": "text",
              "widget":"textarea",
              "label": "Input Custom Css"
            }
          ]
        },
        {
          "name": "l10n",
          "type": "group",
          "label": "Localize",
          "importance": "low",
          "common": true,
          "optional": true,
          "fields": [
            {
              "name": "interaction",
              "type": "text",
              "label": "Interaction title",
              "importance": "low",
              "default": "Interaction",
              "optional": true
            },
            {
              "name": "play",
              "type": "text",
              "label": "Play title",
              "importance": "low",
              "default": "Play",
              "optional": true
            },
            {
              "name": "pause",
              "type": "text",
              "label": "Pause title",
              "importance": "low",
              "default": "Pause",
              "optional": true
            },
            {
              "name": "mute",
              "type": "text",
              "label": "Mute title",
              "importance": "low",
              "default": "Mute",
              "optional": true
            },
            {
              "name": "unmute",
              "type": "text",
              "label": "Unmute title",
              "importance": "low",
              "default": "Unmute",
              "optional": true
            },
            {
              "name": "quality",
              "type": "text",
              "label": "Video quality title",
              "importance": "low",
              "default": "Video Quality",
              "optional": true
            },
            {
              "name": "captions",
              "type": "text",
              "label": "Video captions title",
              "importance": "low",
              "default": "Captions",
              "optional": true
            },
            {
              "name": "close",
              "type": "text",
              "label": "Close button text",
              "importance": "low",
              "default": "Close",
              "optional": true
            },
            {
              "name": "fullscreen",
              "type": "text",
              "label": "Fullscreen title",
              "importance": "low",
              "default": "Fullscreen",
              "optional": true
            },
            {
              "name": "exitFullscreen",
              "type": "text",
              "label": "Exit fullscreen title",
              "importance": "low",
              "default": "Exit Fullscreen",
              "optional": true
            },
            {
              "name": "summary",
              "type": "text",
              "label": "Summary title",
              "importance": "low",
              "default": "Open summary dialog",
              "optional": true
            },
            {
              "name": "bookmarks",
              "type": "text",
              "label": "Bookmarks title",
              "importance": "low",
              "default": "Bookmarks",
              "optional": true
            },
            {
              "name": "endscreen",
              "type": "text",
              "label": "Submit screen title",
              "importance": "low",
              "default": "Submit screen",
              "optional": true
            },
            {
              "name": "defaultAdaptivitySeekLabel",
              "type": "text",
              "label": "Default label for adaptivity seek button",
              "importance": "low",
              "default": "Continue",
              "optional": true
            },
            {
              "name": "continueWithVideo",
              "type": "text",
              "label": "Default label for continue video button",
              "importance": "low",
              "default": "Continue with video",
              "optional": true
            },
            {
              "name": "playbackRate",
              "type": "text",
              "label": "Set playback rate",
              "importance": "low",
              "default": "Playback Rate",
              "optional": true
            },
            {
              "name": "rewind10",
              "type": "text",
              "label": "Rewind 10 Seconds",
              "importance": "low",
              "default": "Rewind 10 Seconds",
              "optional": true
            },
            {
              "name": "navDisabled",
              "type": "text",
              "label": "Navigation is disabled text",
              "importance": "low",
              "default": "Navigation is disabled",
              "optional": true
            },
            {
              "name": "sndDisabled",
              "type": "text",
              "label": "Sound is disabled text",
              "importance": "low",
              "default": "Sound is disabled",
              "optional": true
            },
            {
              "name": "requiresCompletionWarning",
              "type": "text",
              "label": "Warning that the user must answer the question correctly before continuing",
              "importance": "low",
              "default": "You need to answer all the questions correctly before continuing.",
              "optional": true
            },
            {
              "name": "back",
              "type": "text",
              "label": "Back button",
              "importance": "low",
              "default": "Back",
              "optional": true
            },
            {
              "name": "hours",
              "type": "text",
              "label": "Passed time hours",
              "importance": "low",
              "default": "Hours",
              "optional": true
            },
            {
              "name": "minutes",
              "type": "text",
              "label": "Passed time minutes",
              "importance": "low",
              "default": "Minutes",
              "optional": true
            },
            {
              "name": "seconds",
              "type": "text",
              "label": "Passed time seconds",
              "importance": "low",
              "default": "Seconds",
              "optional": true
            },
            {
              "name": "currentTime",
              "type": "text",
              "label": "Label for current time",
              "importance": "low",
              "default": "Current time:",
              "optional": true
            },
            {
              "name": "totalTime",
              "type": "text",
              "label": "Label for total time",
              "importance": "low",
              "default": "Total time:",
              "optional": true
            },
            {
              "name": "singleInteractionAnnouncement",
              "type": "text",
              "label": "Text explaining that a single interaction with a name has come into view",
              "importance": "low",
              "default": "Interaction appeared:",
              "optional": true
            },
            {
              "name": "multipleInteractionsAnnouncement",
              "type": "text",
              "label": "Text for explaining that multiple interactions have come into view",
              "importance": "low",
              "default": "Multiple interactions appeared.",
              "optional": true
            },
            {
              "name": "videoPausedAnnouncement",
              "type": "text",
              "label": "Video is paused announcement",
              "importance": "low",
              "default": "Video is paused",
              "optional": true
            },
            {
              "name": "content",
              "type": "text",
              "label": "Content label",
              "importance": "low",
              "default": "Content",
              "optional": true
            },
            {
              "name": "answered",
              "type": "text",
              "label": "Answered message (@answered will be replaced with the number of answered questions)",
              "importance": "low",
              "default": "@answered answered",
              "optional": true
            },
            {
              "name": "endcardTitle",
              "type": "text",
              "label": "Submit screen title",
              "importance": "low",
              "default": "@answered Question(s) answered",
              "description": "@answered will be replaced by the number of answered questions.",
              "optional": true
            },
            {
              "name": "endcardInformation",
              "type": "text",
              "label": "Submit screen information",
              "importance": "low",
              "default": "You have answered @answered questions, click below to submit your answers.",
              "description": "@answered will be replaced by the number of answered questions.",
              "optional": true
            },
            {
              "name": "endcardInformationNoAnswers",
              "type": "text",
              "label": "Submit screen information for missing answers",
              "importance": "low",
              "default": "You have not answered any questions.",
              "optional": true
            },
            {
              "name": "endcardInformationMustHaveAnswer",
              "type": "text",
              "label": "Submit screen information for answer needed",
              "importance": "low",
              "default": "You have to answer at least one question before you can submit your answers.",
              "optional": true
            },
            {
              "name": "endcardSubmitButton",
              "type": "text",
              "label": "Submit screen submit button",
              "importance": "low",
              "default": "Submit Answers",
              "optional": true
            },
            {
              "name": "endcardSubmitMessage",
              "type": "text",
              "label": "Submit screen submit message",
              "importance": "low",
              "default": "Your answers have been submitted!",
              "optional": true
            },
            {
              "name": "endcardTableRowAnswered",
              "type": "text",
              "label": "Submit screen table row title: Answered questions",
              "importance": "low",
              "default": "Answered questions",
              "optional": true
            },
            {
              "name": "endcardTableRowScore",
              "type": "text",
              "label": "Submit screen table row title: Score",
              "importance": "low",
              "default": "Score",
              "optional": true
            },
            {
              "name": "endcardAnsweredScore",
              "type": "text",
              "label": "Submit screen answered score",
              "importance": "low",
              "default": "answered",
              "optional": true
            },
            {
              "name": "endCardTableRowSummaryWithScore",
              "type": "text",
              "label": "Submit screen row summary including score (for readspeakers)",
              "importance": "low",
              "default": "You got @score out of @total points for the @question that appeared after @minutes minutes and @seconds seconds.",
              "optional": true
            },
            {
              "name": "endCardTableRowSummaryWithoutScore",
              "type": "text",
              "label": "Submit screen row summary for no score (for readspeakers)",
              "importance": "low",
              "default": "You have answered the @question that appeared after @minutes minutes and @seconds seconds.",
              "optional": true
            }
          ]
        }
      ]';
    }
    
    //H5P.CurrikiInteractiveVideo-1.0
    private function updatedCurrikiInteractiveVideoSemantics() {
      return '[
        {
          "name": "interactiveVideo",
          "type": "group",
          "widget": "wizard",
          "label": "Interactive Video Editor",
          "importance": "high",
          "fields": [
            {
              "name": "video",
              "type": "group",
              "label": "Upload/embed video",
              "importance": "high",
              "fields": [
                {
                  "name": "files",
                  "type": "video",
                  "label": "Add a video",
                  "importance": "high",
                  "description": "Click below to add a video you wish to use in your interactive video. You can add a video link or upload video files. It is possible to add several versions of the video with different qualities. To ensure maximum support in browsers at least add a version in webm and mp4 formats.",
                  "extraAttributes": [
                    "metadata"
                  ],
                  "enableCustomQualityLabel": true
                },
                {
                  "name": "startScreenOptions",
                  "type": "group",
                  "label": "Start screen options (unsupported for YouTube videos)",
                  "importance": "low",
                  "fields": [
                    {
                      "name": "title",
                      "type": "text",
                      "label": "The title of this interactive video",
                      "importance": "low",
                      "maxLength": 60,
                      "default": "Interactive Video",
                      "description": "Used in summaries, statistics etc."
                    },
                    {
                      "name": "hideStartTitle",
                      "type": "boolean",
                      "label": "Hide title on video start screen",
                      "importance": "low",
                      "optional": true,
                      "default": false
                    },
                    {
                      "name": "shortStartDescription",
                      "type": "text",
                      "label": "Short description (Optional)",
                      "importance": "low",
                      "optional": true,
                      "maxLength": 120,
                      "description": "Optional. Display a short description text on the video start screen. Does not work for YouTube videos."
                    },
                    {
                      "name": "poster",
                      "type": "image",
                      "label": "Poster image",
                      "importance": "low",
                      "optional": true,
                      "description": "Image displayed before the user launches the video. Does not work for YouTube Videos."
                    }
                  ]
                },
                {
                  "name": "ltiConsumerSettings",
                  "type": "group",
                  "label": "LTI Consumer Settings",
                  "importance": "low",
                  "optional": true,
                  "fields": [
                    {
                      "name": "title",
                      "type": "text",
                      "label": "The title of this tab container",
                      "importance": "low",
                      "maxLength": 60,
                      "default": "LTI Consumer Settings",
                      "description": "Used in summaries, statistics etc."
                    },
                    {
                      "name": "tool_title",
                      "type": "text",
                      "label": "Tool Name",
                      "importance": "low",
                      "maxLength": 60,
                      "default": "Safari Montage",
                      "description": "The tool name is used to identify the tool provider."
                    },
                    {
                      "name": "tool_url",
                      "type": "text",
                      "label": "Tool Url",
                      "importance": "low",
                      "maxLength": 300,
                      "description": "The tool Url is used to match Urls to the correct tool configuration."
                    },
                    {
                      "type": "text",
                      "name": "tool_description",
                      "widget": "html",
                      "label": "Tool Description",
                      "optional": true,
                      "description": "Description of the tool.",
                      "tags": [
                        "strong",
                        "em",
                        "sub"
                      ],
                      "font": {
                        "size": true,
                        "family": true,
                        "color": true,
                        "background": true
                      }
                    },
                    {
                      "name": "tool_consumer_key",
                      "type": "text",
                      "label": "Consumer Key",
                      "importance": "low",
                      "maxLength": 500,
                      "description": "The consumer key can be though of as a username used to authenticate access to the tool."
                    },
                    {
                      "name": "tool_secret_key",
                      "type": "text",
                      "label": "Shared Secret",
                      "importance": "low",
                      "maxLength": 500,
                      "description": "The shared secret can be though of as a password used to authenticate access to the tool."
                    }
                  ]
                },
                {
                  "name": "textTracks",
                  "type": "group",
                  "label": "Text tracks (unsupported for YouTube videos)",
                  "importance": "low",
                  "fields": [
                    {
                      "name": "videoTrack",
                      "type": "list",
                      "label": "Available text tracks",
                      "importance": "low",
                      "optional": true,
                      "entity": "Track",
                      "min": 0,
                      "defaultNum": 1,
                      "field": {
                        "name": "track",
                        "type": "group",
                        "label": "Track",
                        "importance": "low",
                        "expanded": false,
                        "fields": [
                          {
                            "name": "label",
                            "type": "text",
                            "label": "Track label",
                            "description": "Used if you offer multiple tracks and the user has to choose a track. For instance Spanish subtitles could be the label of a Spanish subtitle track.",
                            "importance": "low",
                            "default": "Subtitles",
                            "optional": true
                          },
                          {
                            "name": "kind",
                            "type": "select",
                            "label": "Type of text track",
                            "importance": "low",
                            "default": "subtitles",
                            "options": [
                              {
                                "value": "subtitles",
                                "label": "Subtitles"
                              },
                              {
                                "value": "captions",
                                "label": "Captions"
                              },
                              {
                                "value": "descriptions",
                                "label": "Descriptions"
                              }
                            ]
                          },
                          {
                            "name": "srcLang",
                            "type": "text",
                            "label": "Source language, must be defined for subtitles",
                            "importance": "low",
                            "default": "en",
                            "description": "Must be a valid BCP 47 language tag. If Subtitles is the type of text track selected, the source language of the track must be defined."
                          },
                          {
                            "name": "track",
                            "type": "file",
                            "label": "Track source (WebVTT file)",
                            "importance": "low"
                          }
                        ]
                      }
                    },
                    {
                      "name": "defaultTrackLabel",
                      "type": "text",
                      "label": "Default text track",
                      "description": "If left empty or not matching any of the text tracks the first text track will be used as the default.",
                      "importance": "low",
                      "optional": true
                    }
                  ]
                }
              ]
            },
            {
              "name": "assets",
              "type": "group",
              "label": "Add interactions",
              "importance": "high",
              "widget": "interactiveVideo",
              "video": "video/files",
              "poster": "video/startScreenOptions/poster",
              "fields": [
                {
                  "name": "interactions",
                  "type": "list",
                  "field": {
                    "name": "interaction",
                    "type": "group",
                    "fields": [
                      {
                        "name": "duration",
                        "type": "group",
                        "widget": "duration",
                        "label": "Display time",
                        "importance": "low",
                        "fields": [
                          {
                            "name": "from",
                            "type": "number"
                          },
                          {
                            "name": "to",
                            "type": "number"
                          }
                        ]
                      },
                      {
                        "name": "pause",
                        "label": "Pause video",
                        "importance": "low",
                        "type": "boolean"
                      },
                      {
                        "name": "displayType",
                        "label": "Display as",
                        "importance": "low",
                        "description": "<b>Button</b> is a collapsed interaction the user must press to open. <b>Poster</b> is an expanded interaction displayed directly on top of the video",
                        "type": "select",
                        "widget": "imageRadioButtonGroup",
                        "options": [
                          {
                            "value": "button",
                            "label": "Button"
                          },
                          {
                            "value": "poster",
                            "label": "Poster"
                          }
                        ],
                        "default": "button"
                      },
                      {
                        "name": "buttonOnMobile",
                        "label": "Turn into button on small screens",
                        "importance": "low",
                        "type": "boolean",
                        "default": false
                      },
                      {
                        "name": "label",
                        "type": "text",
                        "widget": "html",
                        "label": "Label",
                        "importance": "low",
                        "description": "Label displayed next to interaction icon.",
                        "optional": true,
                        "enterMode": "p",
                        "tags": [
                          "p"
                        ]
                      },
                      {
                        "name": "x",
                        "type": "number",
                        "importance": "low",
                        "widget": "none"
                      },
                      {
                        "name": "y",
                        "type": "number",
                        "importance": "low",
                        "widget": "none"
                      },
                      {
                        "name": "width",
                        "type": "number",
                        "widget": "none",
                        "importance": "low",
                        "optional": true
                      },
                      {
                        "name": "height",
                        "type": "number",
                        "widget": "none",
                        "importance": "low",
                        "optional": true
                      },
                      {
                        "name": "libraryTitle",
                        "type": "text",
                        "importance": "low",
                        "optional": true,
                        "widget": "none"
                      },
                      {
                        "name": "action",
                        "type": "library",
                        "importance": "low",
                        "options": [
                          "H5P.Nil 1.0",
                          "H5P.Text 1.1",
                          "H5P.Table 1.1",
                          "H5P.Link 1.3",
                          "H5P.Image 1.1",
                          "H5P.Summary 1.10",
                          "H5P.SingleChoiceSet 1.11",
                          "H5P.MultiChoice 1.14",
                          "H5P.TrueFalse 1.6",
                          "H5P.Blanks 1.12",
                          "H5P.DragQuestion 1.13",
                          "H5P.MarkTheWords 1.9",
                          "H5P.DragText 1.8",
                          "H5P.GoToQuestion 1.3",
                          "H5P.IVHotspot 1.2",
                          "H5P.Questionnaire 1.3",
                          "H5P.FreeTextQuestion 1.0"
                        ]
                      },
                      {
                        "name": "adaptivity",
                        "type": "group",
                        "label": "Adaptivity",
                        "importance": "low",
                        "optional": true,
                        "fields": [
                          {
                            "name": "correct",
                            "type": "group",
                            "label": "Action on all correct",
                            "fields": [
                              {
                                "name": "seekTo",
                                "type": "number",
                                "widget": "timecode",
                                "label": "Seek to",
                                "description": "Enter timecode in the format M:SS"
                              },
                              {
                                "name": "allowOptOut",
                                "type": "boolean",
                                "label": "Allow the user to opt out and continue"
                              },
                              {
                                "name": "message",
                                "type": "text",
                                "widget": "html",
                                "enterMode": "p",
                                "tags": [
                                  "strong",
                                  "em",
                                  "del",
                                  "a",
                                  "code"
                                ],
                                "label": "Message"
                              },
                              {
                                "name": "seekLabel",
                                "type": "text",
                                "label": "Label for seek button"
                              }
                            ]
                          },
                          {
                            "name": "wrong",
                            "type": "group",
                            "label": "Action on wrong",
                            "fields": [
                              {
                                "name": "seekTo",
                                "type": "number",
                                "widget": "timecode",
                                "label": "Seek to",
                                "description": "Enter timecode in the format M:SS"
                              },
                              {
                                "name": "allowOptOut",
                                "type": "boolean",
                                "label": "Allow the user to opt out and continue"
                              },
                              {
                                "name": "message",
                                "type": "text",
                                "widget": "html",
                                "enterMode": "p",
                                "tags": [
                                  "strong",
                                  "em",
                                  "del",
                                  "a",
                                  "code"
                                ],
                                "label": "Message"
                              },
                              {
                                "name": "seekLabel",
                                "type": "text",
                                "label": "Label for seek button"
                              }
                            ]
                          },
                          {
                            "name": "requireCompletion",
                            "type": "boolean",
                            "label": "Require full score for task before proceeding",
                            "description": "For best functionality this option should be used in conjunction with the \"Prevent skipping forward in a video\" option of Interactive Video."
                          }
                        ]
                      },
                      {
                        "name": "visuals",
                        "label": "Visuals",
                        "importance": "low",
                        "type": "group",
                        "fields": [
                          {
                            "name": "backgroundColor",
                            "type": "text",
                            "label": "Background color",
                            "widget": "colorSelector",
                            "default": "rgb(255, 255, 255)",
                            "spectrum": {
                              "showInput": true,
                              "showAlpha": true,
                              "preferredFormat": "rgb",
                              "showPalette": true,
                              "palette": [
                                [
                                  "rgba(0, 0, 0, 0)"
                                ],
                                [
                                  "rgb(67, 67, 67)",
                                  "rgb(102, 102, 102)",
                                  "rgb(204, 204, 204)",
                                  "rgb(217, 217, 217)",
                                  "rgb(255, 255, 255)"
                                ],
                                [
                                  "rgb(152, 0, 0)",
                                  "rgb(255, 0, 0)",
                                  "rgb(255, 153, 0)",
                                  "rgb(255, 255, 0)",
                                  "rgb(0, 255, 0)",
                                  "rgb(0, 255, 255)",
                                  "rgb(74, 134, 232)",
                                  "rgb(0, 0, 255)",
                                  "rgb(153, 0, 255)",
                                  "rgb(255, 0, 255)"
                                ],
                                [
                                  "rgb(230, 184, 175)",
                                  "rgb(244, 204, 204)",
                                  "rgb(252, 229, 205)",
                                  "rgb(255, 242, 204)",
                                  "rgb(217, 234, 211)",
                                  "rgb(208, 224, 227)",
                                  "rgb(201, 218, 248)",
                                  "rgb(207, 226, 243)",
                                  "rgb(217, 210, 233)",
                                  "rgb(234, 209, 220)",
                                  "rgb(221, 126, 107)",
                                  "rgb(234, 153, 153)",
                                  "rgb(249, 203, 156)",
                                  "rgb(255, 229, 153)",
                                  "rgb(182, 215, 168)",
                                  "rgb(162, 196, 201)",
                                  "rgb(164, 194, 244)",
                                  "rgb(159, 197, 232)",
                                  "rgb(180, 167, 214)",
                                  "rgb(213, 166, 189)",
                                  "rgb(204, 65, 37)",
                                  "rgb(224, 102, 102)",
                                  "rgb(246, 178, 107)",
                                  "rgb(255, 217, 102)",
                                  "rgb(147, 196, 125)",
                                  "rgb(118, 165, 175)",
                                  "rgb(109, 158, 235)",
                                  "rgb(111, 168, 220)",
                                  "rgb(142, 124, 195)",
                                  "rgb(194, 123, 160)",
                                  "rgb(166, 28, 0)",
                                  "rgb(204, 0, 0)",
                                  "rgb(230, 145, 56)",
                                  "rgb(241, 194, 50)",
                                  "rgb(106, 168, 79)",
                                  "rgb(69, 129, 142)",
                                  "rgb(60, 120, 216)",
                                  "rgb(61, 133, 198)",
                                  "rgb(103, 78, 167)",
                                  "rgb(166, 77, 121)",
                                  "rgb(91, 15, 0)",
                                  "rgb(102, 0, 0)",
                                  "rgb(120, 63, 4)",
                                  "rgb(127, 96, 0)",
                                  "rgb(39, 78, 19)",
                                  "rgb(12, 52, 61)",
                                  "rgb(28, 69, 135)",
                                  "rgb(7, 55, 99)",
                                  "rgb(32, 18, 77)",
                                  "rgb(76, 17, 48)"
                                ]
                              ]
                            }
                          },
                          {
                            "name": "boxShadow",
                            "type": "boolean",
                            "label": "Box shadow",
                            "default": true,
                            "description": "Adds a subtle shadow around the interaction. You might want to disable this for completely transparent interactions"
                          }
                        ]
                      },
                      {
                        "name": "goto",
                        "label": "Go to on click",
                        "importance": "low",
                        "type": "group",
                        "fields": [
                          {
                            "name": "type",
                            "label": "Type",
                            "type": "select",
                            "widget": "selectToggleFields",
                            "options": [
                              {
                                "value": "timecode",
                                "label": "Timecode",
                                "hideFields": [
                                  "url"
                                ]
                              },
                              {
                                "value": "url",
                                "label": "Another page (URL)",
                                "hideFields": [
                                  "time"
                                ]
                              }
                            ],
                            "optional": true
                          },
                          {
                            "name": "time",
                            "type": "number",
                            "widget": "timecode",
                            "label": "Go To",
                            "description": "The target time the user will be taken to upon pressing the hotspot. Enter timecode in the format M:SS.",
                            "optional": true
                          },
                          {
                            "name": "url",
                            "type": "group",
                            "label": "URL",
                            "widget": "linkWidget",
                            "optional": true,
                            "fields": [
                              {
                                "name": "protocol",
                                "type": "select",
                                "label": "Protocol",
                                "options": [
                                  {
                                    "value": "http://",
                                    "label": "http://"
                                  },
                                  {
                                    "value": "https://",
                                    "label": "https://"
                                  },
                                  {
                                    "value": "/",
                                    "label": "(root relative)"
                                  },
                                  {
                                    "value": "other",
                                    "label": "other"
                                  }
                                ],
                                "optional": true,
                                "default": "http://"
                              },
                              {
                                "name": "url",
                                "type": "text",
                                "label": "URL",
                                "optional": true
                              }
                            ]
                          },
                          {
                            "name": "visualize",
                            "type": "boolean",
                            "label": "Visualize",
                            "description": "Show that interaction can be clicked by adding a border and an icon"
                          }
                        ]
                      }
                    ]
                  }
                },
                {
                  "name": "bookmarks",
                  "importance": "low",
                  "type": "list",
                  "field": {
                    "name": "bookmark",
                    "type": "group",
                    "fields": [
                      {
                        "name": "time",
                        "type": "number"
                      },
                      {
                        "name": "label",
                        "type": "text"
                      }
                    ]
                  }
                },
                {
                  "name": "endscreens",
                  "importance": "low",
                  "type": "list",
                  "field": {
                    "name": "endscreen",
                    "type": "group",
                    "fields": [
                      {
                        "name": "time",
                        "type": "number"
                      },
                      {
                        "name": "label",
                        "type": "text"
                      }
                    ]
                  }
                }
              ]
            },
            {
              "name": "summary",
              "type": "group",
              "label": "Summary task",
              "importance": "high",
              "fields": [
                {
                  "name": "task",
                  "type": "library",
                  "options": [
                    "H5P.Summary 1.10"
                  ],
                  "default": {
                    "library": "H5P.Summary 1.10",
                    "params": {}
                  }
                },
                {
                  "name": "displayAt",
                  "type": "number",
                  "label": "Display at",
                  "description": "Number of seconds before the video ends.",
                  "default": 3
                }
              ]
            }
          ]
        },
        {
          "name": "override",
          "type": "group",
          "label": "Behavior settings",
          "importance": "low",
          "optional": true,
          "fields": [
            {
              "name": "startVideoAt",
              "type": "number",
              "widget": "timecode",
              "label": "Start video at",
              "importance": "low",
              "optional": true,
              "description": "Enter timecode in the format M:SS"
            },
            {
              "name": "autoplay",
              "type": "boolean",
              "label": "Auto-play video",
              "default": false,
              "optional": true,
              "description": "Start playing the video automatically"
            },
            {
              "name": "loop",
              "type": "boolean",
              "label": "Loop the video",
              "default": false,
              "optional": true,
              "description": "Check if video should run in a loop"
            },
            {
              "name": "showSolutionButton",
              "type": "select",
              "label": "Override \"Show Solution\" button",
              "importance": "low",
              "description": "This option determines if the \"Show Solution\" button will be shown for all questions, disabled for all or configured for each question individually.",
              "optional": true,
              "options": [
                {
                  "value": "on",
                  "label": "Enabled"
                },
                {
                  "value": "off",
                  "label": "Disabled"
                }
              ]
            },
            {
              "name": "retryButton",
              "type": "select",
              "label": "Override \"Retry\" button",
              "importance": "low",
              "description": "This option determines if the \"Retry\" button will be shown for all questions, disabled for all or configured for each question individually.",
              "optional": true,
              "options": [
                {
                  "value": "on",
                  "label": "Enabled"
                },
                {
                  "value": "off",
                  "label": "Disabled"
                }
              ]
            },
            {
              "name": "showBookmarksmenuOnLoad",
              "type": "boolean",
              "label": "Start with bookmarks menu open",
              "importance": "low",
              "default": false,
              "description": "This function is not available on iPad when using YouTube as video source."
            },
            {
              "name": "showRewind10",
              "type": "boolean",
              "label": "Show button for rewinding 10 seconds",
              "importance": "low",
              "default": false
            },
            {
              "name": "preventSkipping",
              "type": "boolean",
              "default": false,
              "label": "Prevent skipping forward in a video",
              "importance": "low",
              "description": "Enabling this options will disable user video navigation through default controls."
            },
            {
              "name": "deactivateSound",
              "type": "boolean",
              "default": false,
              "label": "Deactivate sound",
              "importance": "low",
              "description": "Enabling this option will deactivate the videos sound and prevent it from being switched on."
            }
          ]
        },
        {
          "name": "l10n",
          "type": "group",
          "label": "Localize",
          "importance": "low",
          "common": true,
          "optional": true,
          "fields": [
            {
              "name": "interaction",
              "type": "text",
              "label": "Interaction title",
              "importance": "low",
              "default": "Interaction",
              "optional": true
            },
            {
              "name": "play",
              "type": "text",
              "label": "Play title",
              "importance": "low",
              "default": "Play",
              "optional": true
            },
            {
              "name": "pause",
              "type": "text",
              "label": "Pause title",
              "importance": "low",
              "default": "Pause",
              "optional": true
            },
            {
              "name": "mute",
              "type": "text",
              "label": "Mute title",
              "importance": "low",
              "default": "Mute",
              "optional": true
            },
            {
              "name": "unmute",
              "type": "text",
              "label": "Unmute title",
              "importance": "low",
              "default": "Unmute",
              "optional": true
            },
            {
              "name": "quality",
              "type": "text",
              "label": "Video quality title",
              "importance": "low",
              "default": "Video Quality",
              "optional": true
            },
            {
              "name": "captions",
              "type": "text",
              "label": "Video captions title",
              "importance": "low",
              "default": "Captions",
              "optional": true
            },
            {
              "name": "close",
              "type": "text",
              "label": "Close button text",
              "importance": "low",
              "default": "Close",
              "optional": true
            },
            {
              "name": "fullscreen",
              "type": "text",
              "label": "Fullscreen title",
              "importance": "low",
              "default": "Fullscreen",
              "optional": true
            },
            {
              "name": "exitFullscreen",
              "type": "text",
              "label": "Exit fullscreen title",
              "importance": "low",
              "default": "Exit Fullscreen",
              "optional": true
            },
            {
              "name": "summary",
              "type": "text",
              "label": "Summary title",
              "importance": "low",
              "default": "Open summary dialog",
              "optional": true
            },
            {
              "name": "bookmarks",
              "type": "text",
              "label": "Bookmarks title",
              "importance": "low",
              "default": "Bookmarks",
              "optional": true
            },
            {
              "name": "endscreen",
              "type": "text",
              "label": "Submit screen title",
              "importance": "low",
              "default": "Submit screen",
              "optional": true
            },
            {
              "name": "defaultAdaptivitySeekLabel",
              "type": "text",
              "label": "Default label for adaptivity seek button",
              "importance": "low",
              "default": "Continue",
              "optional": true
            },
            {
              "name": "continueWithVideo",
              "type": "text",
              "label": "Default label for continue video button",
              "importance": "low",
              "default": "Continue with video",
              "optional": true
            },
            {
              "name": "playbackRate",
              "type": "text",
              "label": "Set playback rate",
              "importance": "low",
              "default": "Playback Rate",
              "optional": true
            },
            {
              "name": "rewind10",
              "type": "text",
              "label": "Rewind 10 Seconds",
              "importance": "low",
              "default": "Rewind 10 Seconds",
              "optional": true
            },
            {
              "name": "navDisabled",
              "type": "text",
              "label": "Navigation is disabled text",
              "importance": "low",
              "default": "Navigation is disabled",
              "optional": true
            },
            {
              "name": "sndDisabled",
              "type": "text",
              "label": "Sound is disabled text",
              "importance": "low",
              "default": "Sound is disabled",
              "optional": true
            },
            {
              "name": "requiresCompletionWarning",
              "type": "text",
              "label": "Warning that the user must answer the question correctly before continuing",
              "importance": "low",
              "default": "You need to answer all the questions correctly before continuing.",
              "optional": true
            },
            {
              "name": "back",
              "type": "text",
              "label": "Back button",
              "importance": "low",
              "default": "Back",
              "optional": true
            },
            {
              "name": "hours",
              "type": "text",
              "label": "Passed time hours",
              "importance": "low",
              "default": "Hours",
              "optional": true
            },
            {
              "name": "minutes",
              "type": "text",
              "label": "Passed time minutes",
              "importance": "low",
              "default": "Minutes",
              "optional": true
            },
            {
              "name": "seconds",
              "type": "text",
              "label": "Passed time seconds",
              "importance": "low",
              "default": "Seconds",
              "optional": true
            },
            {
              "name": "currentTime",
              "type": "text",
              "label": "Label for current time",
              "importance": "low",
              "default": "Current time:",
              "optional": true
            },
            {
              "name": "totalTime",
              "type": "text",
              "label": "Label for total time",
              "importance": "low",
              "default": "Total time:",
              "optional": true
            },
            {
              "name": "singleInteractionAnnouncement",
              "type": "text",
              "label": "Text explaining that a single interaction with a name has come into view",
              "importance": "low",
              "default": "Interaction appeared:",
              "optional": true
            },
            {
              "name": "multipleInteractionsAnnouncement",
              "type": "text",
              "label": "Text for explaining that multiple interactions have come into view",
              "importance": "low",
              "default": "Multiple interactions appeared.",
              "optional": true
            },
            {
              "name": "videoPausedAnnouncement",
              "type": "text",
              "label": "Video is paused announcement",
              "importance": "low",
              "default": "Video is paused",
              "optional": true
            },
            {
              "name": "content",
              "type": "text",
              "label": "Content label",
              "importance": "low",
              "default": "Content",
              "optional": true
            },
            {
              "name": "answered",
              "type": "text",
              "label": "Answered message (@answered will be replaced with the number of answered questions)",
              "importance": "low",
              "default": "@answered answered",
              "optional": true
            },
            {
              "name": "endcardTitle",
              "type": "text",
              "label": "Submit screen title",
              "importance": "low",
              "default": "@answered Question(s) answered",
              "description": "@answered will be replaced by the number of answered questions.",
              "optional": true
            },
            {
              "name": "endcardInformation",
              "type": "text",
              "label": "Submit screen information",
              "importance": "low",
              "default": "You have answered @answered questions, click below to submit your answers.",
              "description": "@answered will be replaced by the number of answered questions.",
              "optional": true
            },
            {
              "name": "endcardInformationNoAnswers",
              "type": "text",
              "label": "Submit screen information for missing answers",
              "importance": "low",
              "default": "You have not answered any questions.",
              "optional": true
            },
            {
              "name": "endcardInformationMustHaveAnswer",
              "type": "text",
              "label": "Submit screen information for answer needed",
              "importance": "low",
              "default": "You have to answer at least one question before you can submit your answers.",
              "optional": true
            },
            {
              "name": "endcardSubmitButton",
              "type": "text",
              "label": "Submit screen submit button",
              "importance": "low",
              "default": "Submit Answers",
              "optional": true
            },
            {
              "name": "endcardSubmitMessage",
              "type": "text",
              "label": "Submit screen submit message",
              "importance": "low",
              "default": "Your answers have been submitted!",
              "optional": true
            },
            {
              "name": "endcardTableRowAnswered",
              "type": "text",
              "label": "Submit screen table row title: Answered questions",
              "importance": "low",
              "default": "Answered questions",
              "optional": true
            },
            {
              "name": "endcardTableRowScore",
              "type": "text",
              "label": "Submit screen table row title: Score",
              "importance": "low",
              "default": "Score",
              "optional": true
            },
            {
              "name": "endcardAnsweredScore",
              "type": "text",
              "label": "Submit screen answered score",
              "importance": "low",
              "default": "answered",
              "optional": true
            },
            {
              "name": "endCardTableRowSummaryWithScore",
              "type": "text",
              "label": "Submit screen row summary including score (for readspeakers)",
              "importance": "low",
              "default": "You got @score out of @total points for the @question that appeared after @minutes minutes and @seconds seconds.",
              "optional": true
            },
            {
              "name": "endCardTableRowSummaryWithoutScore",
              "type": "text",
              "label": "Submit screen row summary for no score (for readspeakers)",
              "importance": "low",
              "default": "You have answered the @question that appeared after @minutes minutes and @seconds seconds.",
              "optional": true
            }
          ]
        }
      ]';
    }
}
