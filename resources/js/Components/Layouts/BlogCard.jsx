import { Link } from '@inertiajs/react'


const removeHTMLTags = (htmlString) =>  {
  // Create a new DOMParser instance
  const parser = new DOMParser();
  // Parse the HTML string
  const doc = parser.parseFromString(htmlString, 'text/html');
  // Extract text content
  const textContent = doc.body.textContent || "";
  // Trim whitespace
  return textContent.trim();
}

const BlogCard = ({ blog }) => {
  return (
    <div className="overflow-hidden rounded-lg bg-white shadow-md transition-all duration-300 hover:shadow-lg">
      <Link href={`/blogs/${blog.id}`} className="block h-full">
        <div className="relative">
          {blog.full_thumbnail_path ? (
            <img 
              src={blog.full_thumbnail_path} 
              alt={blog.title} 
              className="h-48 w-full object-cover" 
              loading="lazy" 
            />
          ) : (
            <div className="flex h-48 w-full items-center justify-center bg-gray-100">
              <span className="text-gray-400">No image available</span>
            </div>
          )}
          {blog.category && (
            <span className="absolute top-3 right-3 rounded-full bg-indigo-600 px-3 py-1 text-xs font-medium text-white">
              {blog.category}
            </span>
          )}
        </div>
        
        <div className="p-4">
          <h3 className="mb-2 text-lg font-semibold text-gray-900 hover:text-indigo-600">
            {blog.title}
          </h3>
          
          <div className="mb-3 h-px w-full bg-gray-100"></div>
          
          <p className="text-sm text-gray-600">
            {blog.description.length > 120
              ? removeHTMLTags(blog.description).substring(0, 120) + '...'
              : removeHTMLTags(blog.description)
            }
          </p>
          
          <div className="mt-4 flex items-center justify-between">
            {blog.published_at && (
              <span className="text-xs text-gray-500">
                {new Date(blog.published_at).toLocaleDateString()}
              </span>
            )}
            <span className="rounded-md bg-indigo-50 px-2 py-1 text-xs font-medium text-indigo-600 hover:bg-indigo-100">
              Read more
            </span>
          </div>
        </div>
      </Link>
    </div>
  )
}

export default BlogCard