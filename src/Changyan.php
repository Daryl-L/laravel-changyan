<?php
/**
 * Changyan.php
 * 
 * This is part of the laravel-changyan.
 * 
 * (c) daryl <daryl.moe@outlook.com>
 *
 * The source file is subject to the MIT license is bundled
 * with this source code in the file LICENSE.
 */
namespace Daryl\LaravelChangyan;

/**
 * Class Changyan.
 */
class Changyan
{
	/**
	 * PC view mode.
	 *
	 * @param string $sourceId
	 * @param bool   $score
	 *
	 * @return mixed
	 */
	public function pc($sourceId = null, $score = false)
	{
		$view = view('changyan::pc', compact('sourceId', 'score'));

		return $view;
	}

	/**
	 * Wap view mode.
	 * 
	 * @param string $sourceId
	 *
	 * @return mixed
	 */
	public function wap($sourceId = null)
	{
		$view = view('changyan::pc', compact('sourceId'));

		return $view;
	}

	/**
	 * Self adaption view mode.
	 *
	 * @param string $sourceId
	 *
	 * @return mixed
	 */
	public function adaption($sourceId = null)
	{
		$view = view('changyan::pc', compact('sourceId'));

		return $view;
	}

	/**
	 * Comment number with comment code.
	 *
	 * @return mixed
	 */
	public function commentNum()
	{
		$view = view('changyan::comment_number.with_code');

		return $view;
	}

	/**
	 * Comment number without comment code.
	 * 
	 * @param string $type
	 * @param string $data
	 *
	 * @return mixed
	 */
	public function commentNumList($type = null, $data = null)
	{
		if ($type && ('url' != $type || 'sourceId' != $type)) {
			throw new ChangyanException('Invalid type.');
		} else {
			$view = view ('changyan::comment_number.without_code', compact('type', 'data'));

			return $view;
		}
	}
}