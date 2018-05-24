import tweepy

consumer_key = 'rpNpl1wXTMAfI6dZQeaXuWSYh'
consumer_key_secret = 'JjjFgZwGE3Y1IpNuP74u8oGxm3Y7DbrqyGfO0wqS88g0B0HhWW'
access_token = '997006336679297025-j9qtAJJqp1LUs4nT7UHRXrJRZSXCNdz'
access_token_secret = 'ob8C3GlrCpIrUAkq2wLNDnVeTtiFLUkyM7IJyRFaHOUb2'

class TweetListener(tweepy.StreamListener):
    def on_status(self,status):
        print('Tweet text: ' + status.text)
        return True

    def on_error (self , status_code):
        print ('Got an error with status code: ' + str(status_code))
        return True

    def on_timeout(self):
        print('Timeout..')
        return True

if __name__ == '__main__':
    listener = TweetListener()
    auth = tweepy.OAuthHandler(consumer_key,consumer_key_secret)
    auth.set_access_token(access_token,access_token_secret)

    stream = tweepy.Stream(auth,listener)
    stream.filter(follow=[],track=['#SFGiants','#Athletics'])

