module SampleApp
  class ActivePageTag < Liquid::Tag
      def initialize(tag_name, text, tokens)
          super
          @text = text
      end

      def render(context)
          name = context.environments.first["page"]["name"]
          return '' if name.nil? or @text.nil?
          return name == @text ? ' active ' : ''
      end
  end
end

Liquid::Template.register_tag('active_page', SampleApp::ActivePageTag)
