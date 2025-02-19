<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class SearchRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'searchType' => 'required|in:my_projects,showcase_projects,org_projects',
            'query' => 'string|max:255',
            'organization_id' => 'required|integer|exists:App\Models\Organization,id',
            'negativeQuery' => 'string|max:255',
            'indexing' => 'array|in:' . config('constants.indexing-options'),
            'startDate' => 'date',
            'endDate' => 'date|after_or_equal:startDate',
            'userIds' => 'array',
            'userIds.*' => 'int|exists:App\User,id',
            'author' => 'string|max:255',
            'h5pLibraries' => 'array',
            'subjectIds' => 'array',
            'subjectIds.*' => 'int|exists:App\Models\Subject,id',
            'educationLevelIds' => 'array',
            'educationLevelIds.*' => 'int|exists:App\Models\EducationLevel,id',
            'authorTagsIds' => 'array',
            'authorTagsIds.*' => 'int|exists:App\Models\AuthorTag,id',
            'model' => 'in:activities,playlists,projects',
            'sort' => 'in:created_at',
            'order' => 'in:asc,desc',
            'from' => 'integer',
            'size' => 'integer'
        ];
    }
}
