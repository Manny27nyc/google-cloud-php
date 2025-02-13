<?php
/**
 * Copyright 2016 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Vision\Tests\Unit\Annotation;

use Google\Cloud\Vision\Annotation\CropHint;
use Yoast\PHPUnitPolyfills\TestCases\TestCase;

/**
 * @group vision
 */
class CropHintTest extends TestCase
{
    private $info;
    private $hint;

    public function set_up()
    {
        $this->info = [
            'boundingPoly' => ['foo' => 'bar'],
            'confidence' => 0.4,
            'importanceFraction' => 0.1
        ];

        $this->hint = new CropHint($this->info);
    }

    public function testBoundingPoly()
    {
        $this->assertEquals($this->info['boundingPoly'], $this->hint->boundingPoly());
    }

    public function testConfidence()
    {
        $this->assertEquals($this->info['confidence'], $this->hint->confidence());
    }

    public function testImportanceFraction()
    {
        $this->assertEquals($this->info['importanceFraction'], $this->hint->importanceFraction());
    }
}
