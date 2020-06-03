<?php

namespace App\Http\Requests;

class ArticleRequest extends Request
{
    public function rules()
    {
        switch($this->method())
        {
            // CREATE
            case 'POST':
          
            // UPDATE
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'title'         =>'required',
                    'content'       =>'required',
                    'category_id'   =>'required', 
                ];
            }
            case 'GET':
            case 'DELETE':
            default:
            {
                return [];
            }
        }
    }

    public function messages()
    {
        return [
            // Validation messages
            
        ];
    }
}
