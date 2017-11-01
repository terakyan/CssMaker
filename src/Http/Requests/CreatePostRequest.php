<?php
/**
 * Copyright (c) 2017. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
 * Morbi non lorem porttitor neque feugiat blandit. Ut vitae ipsum eget quam lacinia accumsan.
 * Etiam sed turpis ac ipsum condimentum fringilla. Maecenas magna.
 * Proin dapibus sapien vel ante. Aliquam erat volutpat. Pellentesque sagittis ligula eget metus.
 * Vestibulum commodo. Ut rhoncus gravida arcu.
 */

namespace Terakyan\Blog\Http\Requests;

use Sahakavatar\Cms\Http\Requests\Request;
use Terakyan\Blog\Repository\PostsRepository;
use Terakyan\Blog\Services\PostsService;

class CreatePostRequest extends Request
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
        if ($this->isMethod('POST')) {
            return [
                'title' => 'required',
                'image' => 'required',
                'description' => 'required',
            ];
        }
        return [];
    }

    public function withValidator($validator)
    {
//        $validator->after(function ($validator) {
//            $postRepo = new PostsRepository();
//            $result = $postRepo->getBy('slug',PostsService::replaceSpaceWithLine($this->title));
//            if ($result) {
//                $validator->errors()->add('title', 'Post with this title already exists');
//            }
//        });
    }
}