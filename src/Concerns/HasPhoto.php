<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Photo.
 *
 * (c) KodeKeep <hello@kodekeep.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KodeKeep\Photo\Concerns;

use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

trait HasPhoto
{
    use HasMediaTrait;

    public function getPhotoAttribute(): string
    {
        return $this->getFirstMediaUrl('photo');
    }

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('photo')
            ->useFallbackUrl($this->getFallbackMediaUrl())
            ->useFallbackPath(public_path('/media/models/fallback/'.strtolower(class_basename($this)).'.png'))
            ->singleFile();
    }

    public function getFallbackMediaUrl(): string
    {
        return 'https://www.gravatar.com/avatar/'.md5(Str::lower($this->name)).'.jpg?s=200&d=mm';
    }
}
