<?php
    namespace App\Controllers;

    class ApiBookmarkController extends \App\Core\ApiController {
        public function getBookmarks() {
            $bookmarks = $this->getSession()->get('bookmarks', []);
            $this->set('bookmarks', $bookmarks);
        }

        public function addBookmark($auctionId) {
            $auctionModel = new \App\Models\AuctionModel($this->getDatabaseConnection());
            $auction = $auctionModel->getById($auctionId);

            if (!$auction) {
                $this->set('error', -1);
                return;
            }

            $bookmarks = $this->getSession()->get('bookmarks', []);

            foreach ($bookmarks as $bookmark) {
                if ($bookmark->auction_id == $auctionId) {
                    $this->set('error', -2);
                    return;
                }
            }

            $bookmarks[] = $auction;
            $this->getSession()->put('bookmarks', $bookmarks);

            $this->set('error', 0);
        }

        public function clear() {
            $this->getSession()->put('bookmarks', []);

            $this->set('error', 0);
        }
    }