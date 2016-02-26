<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PageFormRequest extends Request
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
        $pageId = '';

        if (isset($this->page->id)) {
            $pageId = $this->page->id;
        }

        return [
            'url' => 'required|unique:pages,url,'.$pageId,
            'title' => 'required',
            'name' => 'required',
            'content' => 'required',
        ];
    }
}
