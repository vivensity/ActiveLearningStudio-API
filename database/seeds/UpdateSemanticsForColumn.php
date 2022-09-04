<?php

use Illuminate\Database\Seeder;

class UpdateSemanticsForColumn extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $h5pColumnLibParams = ['name' => "H5P.Column", "major_version" => 1, "minor_version" => 13];
        $h5pColumnLib = DB::table('h5p_libraries')->where($h5pColumnLibParams)->first();

        if ($h5pColumnLib) {
            DB::table('h5p_libraries')->where($h5pColumnLibParams)->update([
                'semantics' => $this->updatedSemantics()
            ]);
        }
    }

    private function updatedSemantics() { 
        return '[
            {
              "name": "content",
              "label": "List of Column Content",
              "importance": "high",
              "type": "list",
              "min": 1,
              "entity": "content",
              "field": {
                "name": "content",
                "type": "group",
                "fields": [
                  {
                    "name": "content",
                    "type": "library",
                    "importance": "high",
                    "label": "Content",
                    "options": [
                      "H5P.Accordion 1.0",
                      "H5P.Agamotto 1.5",
                      "H5P.Audio 1.4",
                      "H5P.AudioRecorder 1.0",
                      "H5P.Blanks 1.12",
                      "H5P.Chart 1.2",
                      "H5P.Collage 0.3",
                      "H5P.CoursePresentation 1.22",
                      "H5P.Dialogcards 1.8",
                      "H5P.DocumentationTool 1.8",
                      "H5P.DragQuestion 1.13",
                      "H5P.DragText 1.8",
                      "H5P.Essay 1.2",
                      "H5P.GuessTheAnswer 1.4",
                      "H5P.Table 1.1",
                      "H5P.AdvancedText 1.1",
                      "H5P.IFrameEmbed 1.0",
                      "H5P.Image 1.1",
                      "H5P.ImageHotspots 1.8",
                      "H5P.ImageHotspotQuestion 1.8",
                      "H5P.ImageSlider 1.1",
                      "H5P.InteractiveVideo 1.22",
                      "H5P.Link 1.3",
                      "H5P.MarkTheWords 1.9",
                      "H5P.MemoryGame 1.3",
                      "H5P.MultiChoice 1.14",
                      "H5P.Questionnaire 1.3",
                      "H5P.QuestionSet 1.17",
                      "H5P.SingleChoiceSet 1.11",
                      "H5P.Summary 1.10",
                      "H5P.Timeline 1.1",
                      "H5P.TrueFalse 1.6",
                      "H5P.TwitterUserFeed 1.0",
                      "H5P.Video 1.5",
                      "H5P.FindTheWords 1.4",
                      "H5P.DocumentsUpload 1.0",
                      "H5P.StarRating 1.0",
                    ]
                  },
                  {
                    "name": "useSeparator",
                    "type": "select",
                    "importance": "low",
                    "label": "Separate content with a horizontal ruler",
                    "default": "auto",
                    "options": [
                      {
                        "value": "auto",
                        "label": "Automatic (default)"
                      },
                      {
                        "value": "disabled",
                        "label": "Never use ruler above"
                      },
                      {
                        "value": "enabled",
                        "label": "Always use ruler above"
                      }
                    ]
                  }
                ]
              }
            }
          ]
          ';
    }
}
