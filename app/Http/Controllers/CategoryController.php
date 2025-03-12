<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CategoryController extends Controller
{
    public function index()
    {
        // Sử dụng phân trang (10 danh mục mỗi trang)
        $categories = Category::paginate(10);

        // Trả về JSON response với dữ liệu phân trang
        return response()->json([
            'message' => 'Categories retrieved successfully',
            'data' => $categories
        ], 200);
    }

    /**
     * Lưu một danh mục mới vào database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        // Validate dữ liệu đầu vào
        $request->validate([
            'Category_Name' => 'required|string|max:255',
        ]);

        // Tạo danh mục mới
        $category = Category::create($request->only(['Category_Name']));

        // Trả về JSON response với thông báo và dữ liệu vừa tạo
        return response()->json([
            'message' => 'Category created successfully',
            'data' => $category
        ], 201);
    }

    /**
     * Hiển thị thông tin chi tiết của một danh mục.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        try {
            // Tìm danh mục theo ID, nếu không tìm thấy sẽ ném ra ngoại lệ
            $category = Category::findOrFail($id);

            // Trả về JSON response với dữ liệu danh mục
            return response()->json([
                'message' => 'Category retrieved successfully',
                'data' => $category
            ], 200);
        } catch (ModelNotFoundException $e) {
            // Xử lý ngoại lệ nếu không tìm thấy danh mục
            return response()->json([
                'error' => 'Category not found'
            ], 404);
        }
    }

    /**
     * Cập nhật thông tin của một danh mục.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        try {
            // Tìm danh mục theo ID, nếu không tìm thấy sẽ ném ra ngoại lệ
            $category = Category::findOrFail($id);

            // Validate dữ liệu đầu vào
            $request->validate([
                'Category_Name' => 'required|string|max:255',
            ]);

            // Cập nhật thông tin danh mục
            $category->update($request->only(['Category_Name']));

            // Trả về JSON response với thông báo và dữ liệu vừa cập nhật
            return response()->json([
                'message' => 'Category updated successfully',
                'data' => $category
            ], 200);
        } catch (ModelNotFoundException $e) {
            // Xử lý ngoại lệ nếu không tìm thấy danh mục
            return response()->json([
                'error' => 'Category not found'
            ], 404);
        }
    }

    /**
     * Xóa một danh mục khỏi database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        try {
            // Tìm danh mục theo ID, nếu không tìm thấy sẽ ném ra ngoại lệ
            $category = Category::findOrFail($id);

            // Xóa danh mục
            $category->delete();

            // Trả về JSON response với thông báo thành công
            return response()->json([
                'message' => 'Category deleted successfully'
            ], 200);
        } catch (ModelNotFoundException $e) {
            // Xử lý ngoại lệ nếu không tìm thấy danh mục
            return response()->json([
                'error' => 'Category not found'
            ], 404);
        }
    }
}