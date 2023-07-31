<?php

namespace Tests\Feature;

use Tests\TestCase;

class BookControllerTest extends TestCase
{
  /**
   * @test
   */
  public function index()
  {
    // ルーティングのテスト
    $response = $this->get(route('books.index'));
    $response->assertok();
    $response->assertViewIs('books.index');
  }
}